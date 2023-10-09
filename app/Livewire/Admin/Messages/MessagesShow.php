<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;

class MessagesShow extends Component
{
    public  $contact, $name, $email, $subject, $message, $status;

    protected $listeners = ['messageShow'];

    public function messageShow($id)
    {
        $this->contact = Message::findOrFail($id);
        $this->name = $this->contact->name;
        $this->email = $this->contact->email;
        $this->subject = $this->contact->subject;
        $this->message = $this->contact->message;
        $this->status = $this->contact->status;
        $this->contact->update(['status' => '1']);
        $this->dispatch('showModalToggle');
        $this->dispatch('refreshData')->to(MessagesData::class);
    }

    public function render()
    {
        return view('admin.messages.messages-show');
    }
}
