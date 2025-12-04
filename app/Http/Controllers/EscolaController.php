<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class EscolaController extends Controller
{
    public function index(){
        return view('pagina_inicial');
    }

    public function cadastrarAluno(){
        return view('cadastrar_aluno');
    }

    public function salvarAluno(Request $request){

        $aluno = new Student();
        $aluno->nome = $request->input('nome');
        $aluno->data_nascimento = $request->input('dataNascimento');
        $aluno->sexo = $request->input('sexo');
        $aluno->nome_usuario = $request->input('usuario');
        $aluno->senha = $request->input('senha');
        $aluno->save();

        echo 'aluno cadastrado';
        return view('cadastrar_aluno');
    }

    public function acessarLoginAluno(){
        return view('login_aluno');
    }

    public function logarAluno(Request $request){
        // Assumindo que o nome da coluna no banco é 'nome_usuario' e 'senha'
        $aluno = Student::select('nome_usuario', 'senha')
            ->where('nome_usuario', $request->input('usuario')) // Coluna, Valor
            ->where('senha', $request->input('senha'))          // Coluna, Valor
            ->first();

        if($aluno){ // Não precisa de isset() aqui, o if verifica se não é null
            return view('pagina_segura_aluno');
        }else{
            echo 'nome de usuario ou senha incorreto';
            return view('login_aluno');
        }
    }
}
