<x-layout titulo="Detalhes do Projeto">

    <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">App Tipo Uber</h5>
        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">
            <strong>Orçamento:</strong> R$ 123.123,00
        </p>
        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">
            <strong>Data Inicio:</strong> 22/08/2025
        </p>
        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">
            <strong>Data Final:</strong> 22/08/2025
        </p>
        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">
            <strong>Cliente:</strong> Maria de Jesus
        </p>

        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">
            <strong>Funcionários Alocados:</strong>
        </p>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nome
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse([] as $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item->nome }}
                        </th>
                    </tr>
                @empty
                    <tr>
                        <th>Nenhum funcionário alocado</th>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-layout>
