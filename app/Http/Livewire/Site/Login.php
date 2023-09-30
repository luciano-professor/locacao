<?php

namespace App\Http\Livewire\Site;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class Login extends Component
{

    public $email;
    public $password;

    protected $rules = [
        'email' => ['required', 'string', 'email', 'bail'],
        'password' => ['required', 'string', 'bail'],
    ];

    public function login() {

        $credenciais = $this->validate();

        //Tentando fazer o login
        if(Auth::attempt($credenciais)) {
            //reiniciar a sessao do PHP
            session()->regenerate();

            redirect()->intended(RouteServiceProvider::HOME);
        }

        //Caso não tenha dado certo autenticação
        $this->addError('email', trans('auth.failed'));

    }

    public function render()
    {
        return view('livewire.site.login')->layout('components.site.layouts.centralizado');
    }
}
