<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicosController extends Controller
{

    public $pagina_atual = false;

    public function __construct(Request $request)
    {

        if($request->segments()[0] != ''){
            $pagina_atual = true;
        }

    }

    public function index()
    {
        return view('servicos.index', ['pagina_atual' => $this->pagina_atual]);
    }
}
