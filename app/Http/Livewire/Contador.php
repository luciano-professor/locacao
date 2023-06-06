<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contador extends Component
{

    //Toda propriedade pública é acessível de forma direta na view do componente
    public $contador = 0;

    public $texto;

    public $nome;

    public $saudacao = false;

    public $cumprimento = "Oi";

    //Métodos públicos podem ser chamados direto da view do componente
    public function incrementar()
    {
        $this->contador++;
    }

    public function decrementar()
    {
        $this->contador--;
    }

    public function render()
    {
        return view('livewire.contador');
    }
}
