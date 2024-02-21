<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DemitirFuncionario extends Controller
{
    /**
     * Demite um funcionário por ID
     */
    public function __invoke(Employee $funcionario)
    {
        if ($funcionario->data_demissao !== NULL) {
            return redirect()
                ->back()
                ->withErrors('Esse funcionário já estava demitido');
        }

        $funcionario->update([
            'data_demissao' => Carbon::now()
        ]);

        return redirect()
                ->route('funcionarios.index')
                ->with('mensagem', 'Funcionário demitido com sucesso!');
    }
}
