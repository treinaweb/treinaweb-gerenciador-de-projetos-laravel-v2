@csrf
<fieldset class="border rounded-lg p-4 mb-4">
    <legend class="font-bold">Dados básicos</legend>
    <x-input nome="nome" :valorPadrao="$funcionario->nome ?? ''" labelTitulo="Nome do funcionario" />
    <x-input nome="cpf" :valorPadrao="$funcionario->cpf ?? ''" labelTitulo="CPF do funcionario" />
    <x-input nome="data_contratacao" :valorPadrao="$funcionario->data_contratacao ?? ''" labelTitulo="Data de contratação do funcionario" />
</fieldset>

<fieldset class="border rounded-lg p-4 mb-4">
    <legend class="font-bold">Endereço</legend>
    <x-input nome="logradouro" :valorPadrao="$funcionario->logradouro ?? ''" labelTitulo="Logradouro do funcionario" />
    <x-input nome="numero" :valorPadrao="$funcionario->numero ?? ''" labelTitulo="Número do funcionario" />
    <x-input nome="bairro" :valorPadrao="$funcionario->bairro ?? ''" labelTitulo="Bairro do funcionario" />
    <x-input nome="cidade" :valorPadrao="$funcionario->cidade ?? ''" labelTitulo="Cidade do funcionario" />
    <x-input nome="complemento" :valorPadrao="$funcionario->complemento ?? ''" labelTitulo="Complemento do funcionario" />
    <x-input nome="cep" :valorPadrao="$funcionario->cep ?? ''" labelTitulo="CEP do funcionario" />
    <x-input nome="estado" :valorPadrao="$funcionario->estado ?? ''" labelTitulo="Estado do funcionario" />
</fieldset>

<x-botao-primario titulo="Salvar dados Funcionário" />