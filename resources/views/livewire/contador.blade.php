<div>
    <h1 class="text-2xl">{{ $texto }} {{ $contador }} </h1>
    <button wire:click="incrementar" class="bg-slate-500 p-1">+</button>
    <button wire:click="decrementar" class="bg-slate-500 p-1">-</button>

    <br />

    <div class="mt-4 p-4 rounded-lg bg-slate-300 space-y-2">

        <h1 class="text-2xl">
            @if ($saudacao)
                {{ $cumprimento }},
            @endif
            {{ $nome }}
        </h1>
        <input wire:model="nome" type="text" />

        <input type="checkbox" wire:model="saudacao" /> Saudação

        <select wire:model="cumprimento">
            <option>Olá</option>
            <option>Oi</option>
            <option>E aí</option>
            <option>Blz</option>
        </select>
    </div>
</div>
