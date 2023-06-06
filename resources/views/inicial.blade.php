<x-admin.layouts.principal>
    {{-- Dentro a gente passa o conteúdo que quer --}}
    {{-- vai parecer no lugar do $slot --}}
    <h1 class="text-green-700 bg-purple-900 font-bold text-2xl">Inicial</h1>

    {{-- Inserindo um componente Livewire --}}
    <livewire:contador texto="Meu contador: " />

</x-admin.layouts.principal>
