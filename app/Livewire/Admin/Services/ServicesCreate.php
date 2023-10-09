<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesCreate extends Component
{
    public $name, $description, $icon;

    public function rules()
    {
        return [
            'name' => 'required|string',
            'description' => 'required|string',
            'icon' => 'required|string'
        ];
    }

    public function submit()
    {
        $data = $this->validate();
        Service::create($data);
        $this->reset(['name', 'description', 'icon']);
        $this->dispatch('createModalToggle');
        $this->dispatch('refreshData')->to(ServicesData::class);
    }
    
    public function render()
    {
        return view('admin.services.services-create');
    }
}
