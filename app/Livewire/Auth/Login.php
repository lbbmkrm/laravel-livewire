<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Login extends Component
{
    #[Layout('components/layouts/auth')]
    #[Title('Login')]

    public $email;
    public $password;

    public function login()
    {

        if (Auth::attempt([
            'email' => $this->email,
            'password' => $this->password
        ])) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('auth.login');
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
