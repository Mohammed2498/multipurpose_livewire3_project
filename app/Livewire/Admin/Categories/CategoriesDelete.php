<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoriesDelete extends Component
{
    protected $listeners = ['categoryDelete'];

    public $category;

    public function categoryDelete($id)
    {
        $this->category = Category::findOrFail($id);
        $this->dispatch('deleteModalToggle');
    }

    public function submit()
    {
        $this->category->delete();
        $this->reset('category');
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshData')->to(CategoriesData::class);
    }

    public function render()
    {
        return view('admin.categories.categories-delete');
    }
}
