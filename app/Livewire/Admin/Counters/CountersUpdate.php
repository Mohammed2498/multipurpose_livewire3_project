<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class CountersUpdate extends Component
{
    public $counter, $name, $count, $icon;
    protected $listeners = [
        'counterUpdate'
    ];

    public function rules()
    {
        return [
            'name' => 'required|string',
            'count' => 'required|numeric',
            'icon' => 'required|string',
        ];
    }

    public function counterUpdate($id)
    {
        $this->counter = Counter::find($id);
        $this->name = $this->counter->name;
        $this->count = $this->counter->count;
        $this->icon = $this->counter->icon;
        $this->resetValidation();
        $this->dispatch('updateModalToggle');
    }

    public function submit()
    {
        $data = $this->validate();
        $this->counter->update($data);
        $this->dispatch('updateModalToggle');
        $this->dispatch('refreshData')->to(CountersData::class);
    }

    public function render()
    {
        return view('admin.counters.counters-update');
    }
}
