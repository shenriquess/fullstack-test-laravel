<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HelloController;
use App\Http\Controllers\InputController;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/teste', function (Request $request) {
    return response()->json([
        'mensagem' => 'Olá mundo, servidor api funcionando!'
    ]);
});

Route::get('/hello', [ HelloController::class, 'hello' ]);


// TODO: criar uma rota que retorne a data-hora atual (sugestão: use a função `now()`)
// TODO: criar uma rota POST que chame uma função em um controller e retorne o texto recebido na requisição

Route::get('/horas', function (Request $request) {
    return response()->json([
        'mensagem' => (new DateTime())->format('d/m/Y H:i:s')
    ]);
});

Route::post('input', [ InputController::class, 'store' ]);
