<?php

namespace App\Http\Livewire\Admin\Carros;

use Livewire\Component;
use App\Models\Car; //importanto o modelo Car (que precisamos usar para conectar ao BD)

use Illuminate\Support\Facades\DB;

class Carros extends Component
{
    public $carros;

    //Atributo que vaia armazenar o que a pessoa digitar no campo de texto da pesquisa
    public $pesquisa = '';

    public function filtrarDados()
    {
        if(empty($this->pesquisa))
        {
            //Comando para buscar todos no banco de dados
            $this->carros = Car::all();
        }
        else
        {
            // DB::enableQueryLog();

            //Montar a consulta específica
            $this->carros = Car::where('modelo', 'like' ,"%$this->pesquisa%")
                ->orWhere('marca', 'like' ,"%$this->pesquisa%")
                ->orWhere('placa', 'like' ,"%$this->pesquisa%")
                ->orWhere('cor', 'like' ,"%$this->pesquisa%")
                ->get();

            // dd(DB::getQueryLog());
        }
    }

    public function render()
    {
        //Chamando o métodos para filtrar os dados que serão exibidos na view
        $this->filtrarDados();

        return view('livewire.admin.carros.carros')
            ->layout('components.admin.layouts.principal');
    }
}
