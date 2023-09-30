<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <title>Locadora de Veículos - Dashboard</title>

    @livewireStyles
</head>

<body>

    {{-- Conteudo Principal --}}
    <main class="h-screen flex flex-col justify-center items-center bg-gray-50">
        {{-- Logo --}}
        <x-shared.logo />

        {{-- Card --}}
        <div class="w-full max-w-md px-6 py-4 bg-white shadow-md rounded-md">
            {{ $slot }}
        </div>
    </main>

    @livewireScripts

</body>

</html>
