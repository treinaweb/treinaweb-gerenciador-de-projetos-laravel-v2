@csrf
<fieldset class="border rounded-lg p-4 mb-4">
    <legend class="font-bold">Dados básicos</legend>
    <x-input nome="nome" :valorPadrao="$funcionario->nome ?? ''" labelTitulo="Nome do funcionario" />
    <x-input nome="cpf" :valorPadrao="$funcionario->cpf ?? ''" labelTitulo="CPF do funcionario" />
    <x-input nome="data_contratacao" :valorPadrao="$funcionario->data_contratacao ?? ''" labelTitulo="Data de contratação do funcionario" />
</fieldset>

<fieldset class="border rounded-lg p-4 mb-4">
    <legend class="font-bold">Endereço</legend>
    <x-input nome="logradouro" :valorPadrao="$funcionario->address->logradouro ?? ''" labelTitulo="Logradouro do funcionario" />
    <x-input nome="numero" :valorPadrao="$funcionario->address->numero ?? ''" labelTitulo="Número do funcionario" />
    <x-input nome="bairro" :valorPadrao="$funcionario->address->bairro ?? ''" labelTitulo="Bairro do funcionario" />
    <x-input nome="cidade" :valorPadrao="$funcionario->address->cidade ?? ''" labelTitulo="Cidade do funcionario" />
    <x-input nome="complemento" :valorPadrao="$funcionario->address->complemento ?? ''" labelTitulo="Complemento do funcionario" />
    <x-input nome="cep" :valorPadrao="$funcionario->address->cep ?? ''" labelTitulo="CEP do funcionario" />
    <x-input nome="estado" :valorPadrao="$funcionario->address->estado ?? ''" labelTitulo="Estado do funcionario" />
</fieldset>

<x-botao-primario titulo="Salvar dados Funcionário" />