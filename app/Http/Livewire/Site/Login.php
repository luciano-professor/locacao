<?php

namespace App\Http\Livewire\Site;

use Livewire\Component;

class Login extends Component
{

    public $email;
    public $password;

    protected $rules = [
        'email' => ['required', 'string', 'email', 'bail'],
        'password' => ['required', 'string', 'bail'],
    ];

    public function render()
    {
        return view('livewire.site.login')->layout('components.site.layouts.centralizado');
    }
}
