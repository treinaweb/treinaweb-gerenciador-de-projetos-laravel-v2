<?php

namespace App\Http\Controllers;

use App\Http\Requests\FuncionarioRequest;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $funcionarios = Employee::paginate(15);

        return view('funcionarios.index', compact('funcionarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('funcionarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FuncionarioRequest $request)
    {
        $estaCriado = Employee::criar(
            $request->only(['nome', 'cpf', 'data_contratacao']),
            $request->only(['logradouro', 'numero', 'complemento', 'bairro', 'cidade', 'cep', 'estado'])
        );

        if (!$estaCriado) {
            return redirect()
            ->back()
            ->withErrors('Erro ao criar novo funcionário');
        }

        return redirect()
            ->route('funcionarios.index')
            ->with('mensagem', 'Funcionário criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $funcionario)
    {
        return view('funcionarios.edit', compact('funcionario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FuncionarioRequest $request, Employee $funcionario)
    {
        $estaAtualizado = $funcionario->atualizar(
            $request->only(['nome', 'cpf', 'data_contratacao']),
            $request->only(['logradouro', 'numero', 'complemento', 'bairro', 'cidade', 'cep', 'estado'])
        );

        if (!$estaAtualizado) {
            return redirect()
                    ->back()
                    ->withErrors('Erro ao atualizar o funcionário');
        }

        return redirect()
            ->route('funcionarios.index')
            ->with('mensagem', 'Funcionário atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
