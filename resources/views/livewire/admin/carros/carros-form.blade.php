<div>
    <h1 class="text-2xl text-amber-500 font-medium">Carros - Formulário</h1>

    <form class="mt-4 flex flex-col space-y-4" wire:submit.prevent="salvar">

        {{-- Placa --}}
        <label>
            <span class="text-gray-700">Placa</span>
            <x-admin.input type="text" wire:model="placa" />
        </label>

        {{-- Marca --}}
        <label>
            <span class="text-gray-700">Marca</span>
            <x-admin.input type="text" wire:model="marca" />
        </label>

        {{-- Modelo --}}
        <label>
            <span class="text-gray-700">Modelo</span>
            <x-admin.input type="text" wire:model="modelo" />
        </label>

        {{-- Ano --}}
        <label>
            <span class="text-gray-700">Ano</span>
            <x-admin.input type="number" wire:model="ano" />
        </label>

        {{-- Cor --}}
        <label>
            <span class="text-gray-700">Cor</span>
            <x-admin.input type="text" wire:model="cor" />
        </label>

        {{-- Chassi --}}
        <label>
            <span class="text-gray-700">Chassi</span>
            <x-admin.input type="text" wire:model="chassi" />
        </label>

        {{-- Diaria --}}
        <label>
            <span class="text-gray-700">Diaria</span>
            <x-admin.input type="number" step="any" min="0" wire:model="diaria" />
        </label>

        {{-- Descrição --}}
        <label>
            <span class="text-gray-700">Descrição</span>
            <x-admin.textarea wire:model="descricao" />
        </label>

        {{-- Botão de Salvar --}}
        <div class="self-end">
            <x-admin.button-submit />
        </div>

    </form>
</div>
