<?php

namespace App\Livewire\Authenticate;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.guest')]
class Login extends Component
{
    #[Validate('required|email')]
    public $email = '';

    #[Validate('required')]
    public $password = '';

    public function sign()
    {
        $validate = $this->validate();

        if (Auth::attempt($validate)) {
            $this->redirectRoute('home');
        }

        session()->flash('alert', ['type' => 'danger', 'message' => 'Email atau kata sandi salah. Silahkan coba lagi.']);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.authenticate.login');
    }
}
