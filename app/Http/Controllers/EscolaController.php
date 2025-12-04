<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class EscolaController extends Controller
{
    public function index(){
            return view('pagina_inicial');
        }

    // Apenas mostra o formulário, quem processa é a rota POST do Fortify (/register)
    public function cadastrarAluno(){
        return view('cadastrar_aluno'); 
    }

    // Apenas mostra o formulário, quem processa é a rota POST do Fortify (/login)
    public function acessarLoginAluno(){
        return view('login_aluno');
    }
}
