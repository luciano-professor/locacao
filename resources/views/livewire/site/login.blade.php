<div>
    <form class="mt-4 flex flex-col space-y-4" wire:submit.prevent="login">

        {{-- Email --}}
        <label>
            <span class="text-gray-700">Email</span>
            <x-admin.input type="text" wire:model.lazy="email" />

            @error('email')
                <span class="text-red-700">{{ $message }}</span>
            @enderror
        </label>

        {{-- Password --}}
        <label>
            <span class="text-gray-700">Senha</span>
            <x-admin.input type="password" wire:model.lazy="password" />

            @error('password')
                <span class="text-red-700">{{ $message }}</span>
            @enderror
        </label>

        {{-- Botao de submit --}}
        <div class="self-end">
            <x-admin.button-submit texto="Entrar" />
        </div>

    </form>
</div>
