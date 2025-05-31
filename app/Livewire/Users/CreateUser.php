<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;


class CreateUser extends Component
{


    public $name = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';

    public function register()
    {

        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        // Set cookie for 1 day
       session()->flash('message','User Created Successfully!');
        // Reset form fields
        $this->reset(['name', 'email', 'password', 'password_confirmation']);
        return redirect()->route('users.create');


        // Dispatch event to trigger JS redirect
    }


    public function render()
    {
        return view('livewire.users.create-user');
    }
}
