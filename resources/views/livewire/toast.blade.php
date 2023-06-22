<div>
    <script>
        Livewire.on('mostrarToast', (mensagem) => {
            Toastify({
                text: mensagem,
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
        });
    </script>

    {{-- Tem que aparecer depois do script do toast --}}
    {{-- Quando uma página que usa esse layout for exibida,
    vai verificar se tem algum toast na sessao e exibir --}}
    @if (session()->has('toast'))
        <script>
            Livewire.emit('mostrarToast', "{{ session('toast') }}");
        </script>
    @endif
</div>
