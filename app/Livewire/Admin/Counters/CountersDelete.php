<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class CountersDelete extends Component
{
    protected $listeners = ['counterDelete'];

    public $counter;

    public function counterDelete($id)
    {
        $this->counter = Counter::findOrFail($id);
        $this->dispatch('deleteModalToggle');
    }

    public function submit()
    {
        $this->counter->delete();
        $this->reset('counter');
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshData')->to(CountersData::class);
    }

    public function render()
    {
        return view('admin.counters.counters-delete');
    }
}
