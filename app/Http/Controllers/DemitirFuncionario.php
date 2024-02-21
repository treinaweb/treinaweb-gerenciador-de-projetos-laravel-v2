<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemitirFuncionario extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return 'cheguei no controller';
    }
}
