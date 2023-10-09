<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesDelete extends Component
{
    public $service;
    protected $listeners = ['serviceDelete'];

    public function serviceDelete($id)
    {
        $this->service = Service::findOrFail($id);
        $this->dispatch('deleteModalToggle');
    }

    public function submit()
    {
        $this->service->delete();
        $this->reset('service');
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshData')->to(ServicesData::class);
    }


    public function render()
    {
        return view('admin.services.services-delete');
    }
}
