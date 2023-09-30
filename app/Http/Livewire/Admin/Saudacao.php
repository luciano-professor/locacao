<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Saudacao extends Component
{
    public $nome;

    public function render()
    {
        //Pegando o usuário logado
        $usuario = Auth::user();

        //Jogo o nome na propriedade que vai ser exibida na view
        $this->nome = $usuario->name;

        return view('livewire.admin.saudacao');
    }
}
