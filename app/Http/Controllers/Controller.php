<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //Verbo HttP associado: GET

    public function index() {
        return \Illuminate\Support\Facades\Response::json([
            'sucesso' => true,
            'mensagem' => "Listagem de todas as músicas simulado com sucesso"
        ]);
   }
   //Verbo HTTP associado 
   //

}
