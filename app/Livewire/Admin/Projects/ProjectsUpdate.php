<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProjectsUpdate extends Component
{
    use WithFileUploads;

    public $project, $name, $description, $image, $category_id, $link, $categories;

    protected $listeners = ['projectUpdate'];



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

    public function projectUpdate($id)
    {
        $this->project = Project::findOrFail($id);
        $this->name = $this->project->name;
        $this->description = $this->project->description;
        $this->link = $this->project->link;
        $this->category_id = $this->project->category_id;
        $this->resetValidation();
        $this->dispatch('updateModalToggle');
    }


    public function submit()
    {
        $data = $this->validate($this->rules(), [], $this->attributes());

        if ($this->image) {
            if ($this->project->image) {
                unlink($this->project->image);
            }
            $imageName = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('projects', $imageName, 'public');
            $data['image'] = 'storage/projects/' . $imageName;
        } else {
            unset($data['image']);
        }

        $this->project->update($data);
        $this->resetInputFields();
        $this->dispatch('updateModalToggle');

        $this->dispatch('refreshData')->to(ProjectsData::class);
    }

    public function render()
    {
        return view('admin.projects.projects-update');
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
