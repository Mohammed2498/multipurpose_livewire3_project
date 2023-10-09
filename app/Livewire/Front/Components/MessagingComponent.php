<?php

namespace App\Livewire\Front\Components;

use App\Models\Message;
use Livewire\Component;

class MessagingComponent extends Component
{
    public $name, $email, $subject, $message;

    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|'
        ];
    }

    public function submit()
    {
        $data = $this->validate();
        Message::create($data);
        $this->reset(['email', 'name', 'message', 'subject']);
        session()->flash('success', 'Message Sent Successfully');
    }

    public function render()
    {
        return view('front.components.messaging-component');
    }
}
