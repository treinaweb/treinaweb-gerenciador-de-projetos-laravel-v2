<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Contracts\View\View;
use App\Http\Requests\ProjetoRequest;
use App\Models\Client;
use App\Models\Employee;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;

class ProjetoController extends Controller
{
    /**
     * Mostra a lista de projetos
     */
    public function index(): View|Factory
    {
        $projetos = Project::with('client')->paginate(15);

        return view('projetos.index', compact('projetos'));
    }

    /**
     * Mostra o formulário para criar um novo projeto
     */
    public function create(): View|Factory
    {
        $clientes = Client::all();
        $funcionarios = Employee::ativo()->get();

        return view('projetos.create', compact('clientes', 'funcionarios'));
    }

    /**
     * Cria um novo projeto no banco
     */
    public function store(ProjetoRequest $request): Redirector|RedirectResponse
    {
        $projeto = Project::create(
            $request->all()
        );

        $projeto->employees()->sync($request->funcionarios);

        return redirect()
                ->route('projetos.index')
                ->with('mensagem', 'Projeto criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Mostra o formulário com os dados para edição
     */
    public function edit(Project $projeto): View|Factory
    {
        $clientes = Client::all();
        $funcionarios = Employee::ativo()->get();

        return view('projetos.edit', compact('projeto', 'clientes', 'funcionarios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjetoRequest $request, Project $projeto): Redirector|RedirectResponse
    {
        $projeto->update(
            $request->all()
        );

        $projeto->employees()->sync($request->funcionarios);

        return redirect()
                ->route('projetos.index')
                ->with('mensagem', 'Projeto atualizado com sucesso!');
    }

    /**
     * Deleta um projeto especifico
     */
    public function destroy(Project $projeto): Redirector|RedirectResponse
    {
        $projeto->delete();

        return redirect()
                ->route('projetos.index')
                ->with('mensagem', 'Projeto apagado com sucesso!');
    }
}
