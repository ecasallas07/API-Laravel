<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//middleware de autenticacion, solo si el usuario se ha logueado

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


//Uso resource para que en las rutas se crean automaticamente y no escribir las rutas del CRUD
//Para ver estas rutas es con el comando route:list
Route::resource('/note',NoteController::class);

