<?php

namespace App\Http\Livewire\Admin\Carros;

use Livewire\Component;
use App\Models\Car;

class CarrosForm extends Component
{

    public Car $carro;

    protected $rules = [
        'carro.placa' => 'required|string|size:8|bail',
        'carro.modelo' => 'required|string|max:50|min:2|bail',
        'carro.marca' => 'required|string|max:50|min:2|bail',
        'carro.ano' => 'required|digits:4|bail',
        'carro.descricao' => 'string|nullable|bail',
        'carro.cor' => 'required|string|max:20|min:2|bail',
        'carro.chassi' => 'required|string|max:17|min:2|bail',
        'carro.diaria' => 'required|decimal:0,2|bail',
    ];

    protected $validationAttributes = [
        'diaria' => 'valor da diária',
        'descricao' => 'descrição',
    ];

    // protected $messages = [
    //     'carro.placa.required' => 'Seu burro, preencha a placa!!!!!!',
    //     'required' => 'Por favor, preencha o campo :attribute',
    // ];

    public function mount()
    {
        $this->carro = new Car();
    }

    //O método updated é chamado automaticamente pelo Livewire sempre que uma propriedade
    //que está ligada no formulário com o wire:model é atualizada
    public function updated($nomePropriedade)
    {
        $this->validateOnly($nomePropriedade);
    }

    public function salvar()
    {
        //Executando a validação
        $this->validate();

        // // Mandando salvar no BD
        $this->carro->save();

        session()->flash('toast', 'Carro salvo com sucesso!');

        return redirect('/carros');
    }


    public function render()
    {
        return view('livewire.admin.carros.carros-form')
        ->layout('components.admin.layouts.principal');
    }
}
