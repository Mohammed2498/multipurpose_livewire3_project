<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class CategoriesCreate extends Component
{
    public $name;

    public function rules()
    {
        return [
            'name' => 'required|string',
        ];
    }

    public function submit()
    {
        $data = $this->validate();
        Category::create($data);
        $this->reset(['name']);
        $this->dispatch('createModalToggle');
        //refreshtheindex page
        $this->dispatch('refreshData')->to(CategoriesData::class);
    }


    public function render()
    {
        return view('admin.categories.categories-create');
    }
}
