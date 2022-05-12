<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionarioController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/funcionario',[FuncionarioController::class,'apiAll']);

Route::get('/funcionario/{funcionario}',[FuncionarioController::class,'apiFind']);

Route::post('/funcionario',[FuncionarioController::class,'apiStore']);

Route::put('/funcionario/{funcionario}',[FuncionarioController::class,'apiUpdate']);

Route::delete('/funcionario/{funcionario}',[FuncionarioController::class,'apiDelete']);