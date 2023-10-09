<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class ProjectsData extends Component
{

    use WithPagination;

    public $search;

    protected $listeners = ['refreshData' => '$refresh'];

    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    public function render()
    {
        return view(
            'admin.projects.projects-data',
            ['data' => Project::where('name', 'like', '%' . $this->search . '%')->paginate(10)]
        );
    }
}
