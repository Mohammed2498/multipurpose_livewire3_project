<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProjectsCreate extends Component
{
    use WithFileUploads;

    public $name, $description, $image, $category_id, $link, $categories;

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'required|string',
            'link' => 'nullable|url',
            'image' => 'nullable|image',
            'category_id' => 'required'
        ];
    }
    public function attributes()
    {
        return [
            'category_id' => 'Category'
        ];
    }

    public function submit()
    {
        $data = $this->validate($this->rules(), [], $this->attributes());

        if ($this->image) {
            $imageName = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('projects', $imageName, 'public');
            $data['image'] = 'storage/projects/' . $imageName;
        } else {
            unset($data['image']);
        }

        // if ($this->image) {
        //     $data['image'] = $this->image->store('projects', 'public');
        // } else {
        //     unset($data['image']);
        // }

        Project::create($data);
        $this->resetInputFields();
        $this->dispatch('createModalToggle');
        $this->dispatch('refreshData')->to(ProjectsData::class);
        $this->dispatch('showSuccessToast', ['message' => 'Data saved successfully!']);
    }

    public function render()
    {
        return view('admin.projects.projects-create');
    }
    
    public function resetInputFields()
    {
        return $this->reset(
            [
                'name', 'description', 'image', 'category_id', 'link'
            ]
        );
    }
}
