<?php

namespace App\Http\Controllers;

abstract class Controller
{
    // Verbo HTTP associado: GET

    public function index()
    {
        return response()->json([
            'sucesso' => true,
            'mensagem' => 'Listagem de todas as músicas simulado com sucesso'
        ]);
    }
}