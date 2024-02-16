<x-layout titulo="Editar Cliente">
    <form method="post" action="{{ route('clientes.update', $cliente->id) }}" class="max-w-6xl mx-auto">
        @csrf
        @method('put')
        <x-input nome="nome" :valorPadrao="$cliente->nome" labelTitulo="Nome do cliente" />
        <x-input nome="endereco" :valorPadrao="$cliente->endereco" labelTitulo="Endereço do cliente" />
        <x-input nome="descricao" :valorPadrao="$cliente->descricao" labelTitulo="Descrição do cliente" />
        <x-botao-primario titulo="Atualizar Cliente" />
    </form>
</x-layout>


