<?php

namespace App\Livewire\Admin\Subscribers;

use App\Models\Subscriber;
use Livewire\Component;
use Livewire\WithPagination;

class SubscribersData extends Component
{
    use WithPagination;

    public $search;

    protected $listeners = [
        'refreshData' => '$refresh',
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view(
            'admin.subscribers.subscribers-data',
            ['data' => Subscriber::where('email', 'like', '%' . $this->search . '%')->paginate(10)]
        );
    }
}
