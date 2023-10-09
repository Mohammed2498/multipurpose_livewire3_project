<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesUpdate extends Component
{
    public $service, $name, $description, $icon;

    protected $listeners = ['serviceUpdate'];

    public function rules()
    {
        return [
            'name' => 'required|string',
            'description' => 'required|string',
            'icon' => 'required|string'
        ];
    }

    public function serviceUpdate($id)
    {
        $this->service = Service::findOrFail($id);
        $this->name = $this->service->name;
        $this->description = $this->service->description;
        $this->icon = $this->service->icon;
        $this->resetValidation();
        $this->dispatch('updateModalToggle');
    }


    public function submit()
    {
        $data = $this->validate();
        $this->service->update($data);
        $this->dispatch('updateModalToggle');
        $this->dispatch('refreshData')->to(ServicesData::class);
    }

    public function render()
    {
        return view('admin.services.services-update');
    }
}
