<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class ProjetoController extends Controller
{
    /**
     * Mostra a lista de projetos
     */
    public function index()
    {
        $projetos = Project::with('client')->paginate(15);

        return view('projetos.index', compact('projetos'));
    }

    /**
     * Mostra o formulário para criar um novo projeto
     */
    public function create(): View|Factory
    {
        return view('projetos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
