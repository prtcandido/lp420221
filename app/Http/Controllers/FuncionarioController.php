<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Funcionario;

use App\Http\Requests\FuncionarioRequest;

use App\Http\Resources\Funcionario as FuncionarioResource;

class FuncionarioController extends Controller
{
    //public function __construct(Request $request)
    //{
    //    $this->middleware('auth',[ 'except'=>['index','show'] ]);
    //}

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

    // ---- Função de API

    // GET + /api/funcionario/3  (routes/api.php)
    public function apiFind(Funcionario $funcionario)
    {
        return new FuncionarioResource($funcionario);
    }

    // GET + /api/funcionario
    public function apiAll()
    {
        return FuncionarioResource::collection(Funcionario::all());
    }

    // POST + /api/funcionario + JSON com os dados
    public function apiStore(Request $request)
    {
        try{
            $funcionario = Funcionario::create($request->all());
            return response()->json($funcionario,201);
        } catch (\Exception $ex) {
            return response()->json(null,400);
        } 
    }

    // PUT + /api/funcionario/3 + JSON com novos dados
    public function apiUpdate(Request $request,Funcionario $funcionario)
    {
        try{
            $funcionario->update($request->all());
            return response()->json($funcionario,200);
        } catch (\Exception $ex) {
            return response()->json(null,400);
        } 
    }

    // DELETE + /api/funcionario/3
    public function apiDelete(Funcionario $funcionario)
    {
        try{
            $funcionario->delete();
            return response()->json(null,204);
        } catch (\Exception $ex) {
            return response()->json(null,400);
        } 
    }
}
