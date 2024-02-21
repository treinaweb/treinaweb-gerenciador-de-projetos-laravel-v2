@csrf
<x-input nome="nome" :valorPadrao="$projeto->nome ?? ''" labelTitulo="Nome do projeto" />
<x-input nome="orcamento" :valorPadrao="$projeto->orcamento ?? ''" labelTitulo="Orçamento do projeto" />
<x-input nome="data_inicio" :valorPadrao="$projeto->data_inicio ?? ''" labelTitulo="Data de inicio do projeto" />
<x-input nome="data_final" :valorPadrao="$projeto->data_final ?? ''" labelTitulo="Data final do projeto" />
<x-input nome="client_id" :valorPadrao="$projeto->client_id ?? ''" labelTitulo="Cliente do projeto" />

<x-botao-primario titulo="Salvar dados projeto" />