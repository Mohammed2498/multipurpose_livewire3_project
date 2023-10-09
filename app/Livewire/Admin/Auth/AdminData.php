<?php

namespace App\Livewire\Admin\Auth;

use App\Models\Admin;
use Livewire\Component;

class AdminData extends Component
{

    public $search;

    protected $listeners = ['refreshData' => '$refresh'];


    public function render()
    {
        return view(
            'admin.auth.admin-data',
            ['data' => Admin::where('name', 'like', '%' . $this->search . '%')->paginate(10)]
        );
    }
}
