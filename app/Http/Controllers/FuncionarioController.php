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
        try {
            DB::beginTransaction();
            
            $funcionario = Employee::create(
                $request->only(['nome', 'cpf', 'data_contratacao'])
            );
    
            $funcionario->address()->create(
                $request->only(['logradouro', 'numero', 'complemento', 'bairro', 'cidade', 'cep', 'estado'])
            );

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();

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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
