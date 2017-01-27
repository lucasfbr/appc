<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PerfilController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        return view('admin.perfil.index');

    }

    public function update(Request $request, $id){

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required','email',
            'empresa' => 'required|max:255',
            'celular' => 'required|max:14|min:14',
            'estado' => 'required|max:255',
            'cidade' => 'required|max:255',
        ]);

        $usuario = User::find($id);
        $dados = $request->all();

        if($usuario->update($dados)){
            return redirect('/painel/perfil')->with('sucesso', 'Usuário editado com sucesso!');
        }else{
            return redirect('/painel/perfil')->with('erro', 'Erro ao editar um usuário, tente novamente mais tarde!');
        }

    }

}
