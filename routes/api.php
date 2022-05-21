<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductosController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/producto',[ProductosController::class,'index']);
Route::get('/consulta/{id}',[ProductosController::class,'show']); // estoy trallendo la  consulta  que se  hizo en  show
//route ,  get es para traer y un post para insertar delete eliminar put  es actualizar  se coloca el nombre  que se quiera de la ruta  que se va 
// itillizar en la ruta , sigue el nombre del controlador  se le coloca  tambien en el use
#Route::get('/funcionarios',)