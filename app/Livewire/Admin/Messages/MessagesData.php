<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;

class MessagesData extends Component
{
    public $search;
    protected $listeners = ['refreshData' => '$refresh'];

    public function render()
    {
        return view(
            'admin.messages.messages-data',
            ['data' => Message::where('name', 'like', '%' . $this->search . '%')->paginate(10)]
        );
    }
}
