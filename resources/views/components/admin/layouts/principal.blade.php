<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <title>Locadora de Veículos - Dashboard</title>

    {{-- Carregando o css do loading --}}
    <link rel="stylesheet" href="{{ asset('css/loading.css') }}">

    {{-- CSS da biblioteca do Toastfy --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    @livewireStyles
</head>

<body>

    {{-- Menu Lateral --}}
    <x-admin.menu-lateral />

    {{-- Conteudo Principal --}}
    <main class="ml-auto mb-6 w-[85%]">
        <div class="px-6 pt-6">
            {{ $slot }}
        </div>
    </main>

    @livewireScripts

    {{-- Script do Toastfy --}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    {{-- Tem que aparecer depois do script do toast --}}
    {{-- Quando uma página que usa esse layout for exibida,
    vai verificar se tem algum toast na sessao e exibir --}}
    @if (session()->has('toast'))
        <script>
            Toastify({
                text: "{{ session('toast') }}",
                duration: 3000, //ms
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "#ccfbf1",
                    borderTop: '4px solid #14b8a6',
                    color: "#134e4a"
                },
                onClick: function() {} // Callback after click
            }).showToast();
        </script>
    @endif

</body>

</html>
