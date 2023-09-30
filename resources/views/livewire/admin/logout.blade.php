<div class="pt-3 border-t">

    <button class="px-2 py-3 flex items-center space-x-4 text-amber-500 group" wire:click.prevent="logout">

        <span class="group-hover:text-amber-700">
            {{-- Icone --}}
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
            </svg>
        </span>

        {{-- Texto --}}
        <span class="group-hover:text-amber-700">
            Sair
        </span>

    </button>

</div>
