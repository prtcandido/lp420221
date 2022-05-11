<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Funcionario;

use App\Http\Requests\FuncionarioRequest;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todosFunc = Funcionario::all();
        return View('funcionario.index')->with('funcs',$todosFunc);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('funcionario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FuncionarioRequest $request)
    {
        /*
        $dados = $request->all(); // pegar dados digitados no formulário
                                  // $dados: ['nome'=>'Joao','endereco'=>'rua x,34']
        $f = new Funcionario();
        $f->nome = $dados['nome'];
        $f->endereco = $dados['endereco'];

        $f->save();
        */

        Funcionario::create( $request->all() );

        return redirect('/funcionario'); //'Funcionario Cadastrado';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Funcionario $funcionario) //($id)
    {
        //$f = Funcionario::find($id);

        return View('funcionario.show')->with('func',$funcionario);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Funcionario $funcionario)
    {
        return View('funcionario.edit')->with('func',$funcionario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FuncionarioRequest $request, Funcionario $funcionario)
    {
        $funcionario->update( $request->all() );

        return redirect('/funcionario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Funcionario $funcionario)
    {
        $funcionario->delete();

        return redirect('/funcionario');
    }
}
