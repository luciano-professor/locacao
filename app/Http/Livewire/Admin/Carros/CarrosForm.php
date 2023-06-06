<?php

namespace App\Http\Livewire\Admin\Carros;

use Livewire\Component;
use App\Models\Car;

class CarrosForm extends Component
{

    public $placa;
    public $modelo;
    public $marca;
    public $ano;
    public $descricao;
    public $cor;
    public $chassi;
    public $diaria;

    public function salvar()
    {
        $carro = new Car();
        $carro->placa = $this->placa;
        $carro->marca = $this->marca;
        $carro->modelo = $this->modelo;
        $carro->ano = $this->ano;
        $carro->descricao = $this->descricao;
        $carro->cor = $this->cor;
        $carro->chassi = $this->chassi;
        $carro->diaria = $this->diaria;

        // // Mandando salvar no BD
        $carro->save();

        session()->flash('toast', 'Carro salvo com sucesso!');

        return redirect('/carros');
    }


    public function render()
    {
        return view('livewire.admin.carros.carros-form')
        ->layout('components.admin.layouts.principal');
    }
}
