<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\Aluno;

class EmpresaController extends Controller
{
    public function index(){
        $dados = Empresa::all();
        return view('empresa', ['dados' => $dados]);
    }

    public function aluno(){
        $dados = Aluno::all();
        return view('alunos', ['dados' => $dados]);
    }
}
