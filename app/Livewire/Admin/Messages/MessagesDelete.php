<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;

class MessagesDelete extends Component
{
    public $message;

    protected $listeners = ['messageDelete'];

    public function messageDelete($id)
    {
        $this->message = Message::findOrFail($id);
        $this->dispatch('deleteModalToggle');
    }

    public function submit()
    {
        $this->message->delete();
        $this->reset('message');
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshData')->to(MessagesData::class);
    }

    public function render()
    {
        return view('admin.messages.messages-delete');
    }
}
