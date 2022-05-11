<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class TesteController extends Controller
{
    public function f1($valor){
        $x = 10 + $valor;
        return View('view1')->with('varView',$x);
    }

    public function gravar() {
        $a = new Aluno();
        $a->nome = 'Joao';
        $a->save();

        // Aluno::create(['nome' => 'Joao']);
    }

    public function ler() {
        $a = Aluno::find(1);
        return View('aluno')->with('objaluno',$a);
    }
}
