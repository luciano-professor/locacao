<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class Logout extends Component
{

    public function logout() {
        //Faz o logout
        Auth::logout();

        //Invalidar a sessão
        session()->invalidate();

        //Gerando uma sessao nova do PHP
        session()->regenerate();

        redirect('/');
    }

    public function render()
    {
        return view('livewire.admin.logout');
    }
}
