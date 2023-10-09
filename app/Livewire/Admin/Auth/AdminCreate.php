<?php

namespace App\Livewire\Admin\Auth;

use Livewire\Component;
use Illuminate\Validation\Rules;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminCreate extends Component
{
    public $name, $email, $password, $password_confirmation;

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
    }

    public function submit()
    {

        $data = $this->validate();
        $data['password'] = Hash::make($this->password);
        Admin::create($data);
        $this->resetInputFields();
        $this->dispatch('createModalToggle');
        $this->dispatch('refreshData')->to(AdminData::class);
    }

    public function render()
    {
        return view('admin.auth.admin-create');
    }

    public function resetInputFields()
    {
        return $this->reset(
            [
                'name', 'email', 'password', 'password_confirmation'
            ]
        );
    }
}
