<div>
    <h1 class="text-2xl text-amber-500 font-medium">Carros - Formulário</h1>

    <form class="mt-4 flex flex-col space-y-4" wire:submit.prevent="salvar">

        {{-- Placa --}}
        <label>
            <span class="text-gray-700">Placa</span>
            <x-admin.input type="text" wire:model.lazy="carro.placa" />

            @error('carro.placa')
                <span class="text-red-700"><small>{{ $message }}</small></span>
            @enderror
        </label>

        {{-- Marca --}}
        <label>
            <span class="text-gray-700">Marca</span>
            <x-admin.input type="text" wire:model.lazy="carro.marca" />

            @error('carro.marca')
                <span class="text-red-700"><small>{{ $message }}</small></span>
            @enderror
        </label>

        {{-- Modelo --}}
        <label>
            <span class="text-gray-700">Modelo</span>
            <x-admin.input type="text" wire:model.lazy="carro.modelo" />

            @error('carro.modelo')
                <span class="text-red-700"><small>{{ $message }}</small></span>
            @enderror
        </label>

        {{-- Ano --}}
        <label>
            <span class="text-gray-700">Ano</span>
            <x-admin.input type="number" wire:model.lazy="carro.ano" />

            @error('carro.ano')
                <span class="text-red-700"><small>{{ $message }}</small></span>
            @enderror
        </label>

        {{-- Cor --}}
        <label>
            <span class="text-gray-700">Cor</span>
            <x-admin.input type="text" wire:model.lazy="carro.cor" />

            @error('carro.cor')
                <span class="text-red-700"><small>{{ $message }}</small></span>
            @enderror
        </label>

        {{-- Chassi --}}
        <label>
            <span class="text-gray-700">Chassi</span>
            <x-admin.input type="text" wire:model.lazy="carro.chassi" />

            @error('carro.chassi')
                <span class="text-red-700"><small>{{ $message }}</small></span>
            @enderror
        </label>

        {{-- Diaria --}}
        <label>
            <span class="text-gray-700">Valor da Diária</span>
            <x-admin.input type="number" step="any" min="0" wire:model.lazy="carro.diaria" />

            @error('carro.diaria')
                <span class="text-red-700"><small>{{ $message }}</small></span>
            @enderror
        </label>

        {{-- Descrição --}}
        <label>
            <span class="text-gray-700">Descrição</span>
            <x-admin.textarea wire:model.lazy="carro.descricao" />

            @error('carro.descricao')
                <span class="text-red-700"><small>{{ $message }}</small></span>
            @enderror
        </label>

        {{-- Botão de Salvar --}}
        <div class="self-end">
            <x-admin.button-submit />
        </div>

    </form>
</div>
