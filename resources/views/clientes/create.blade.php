<x-layout titulo="Cadastrar novo Cliente">
    <form method="post" action="{{ route('clientes.store') }}" class="max-w-6xl mx-auto">
        @csrf
        <x-input nome="nome" labelTitulo="Nome do cliente" />
        <x-input nome="endereco" labelTitulo="Endereço do cliente" />
        <x-input nome="descricao" labelTitulo="Descrição do cliente" />
        <x-botao-primario titulo="Cadastrar Cliente" />
    </form>
</x-layout>


