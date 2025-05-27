<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
class Login extends Component
{

    
    public $email = '';
    public $password = '';

    public $errorMessage = '';

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->regenerate();

            // Store email in a cookie for 1 day (1440 minutes)

            return redirect()->route('dashboard');
        }

        $this->errorMessage = 'Invalid credentials. Please try again.';
    }

   
    public function render()
    {
        return view('livewire.login')->layout('components.layouts.index');
    }
}
