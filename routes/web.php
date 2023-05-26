<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/mapa', [App\Http\Controllers\MapaController::class, 'index'])->name('mapa');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/calendario', [App\Http\Controllers\HomeController::class, 'calendario'])->name('home');

//Agenda funções
Route::get('/agenda', [App\Http\Controllers\AgendaController::class, 'index'])->name('agenda');
Route::post('/agenda/salvar',[App\Http\Controllers\AgendaController::class,'salvar'])->name('salvar.agenda');

Route::get('/agenda/edit/{id}',[App\Http\Controllers\AgendaController::class,'agendaEdit']);
Route::post('/agenda/update/{id}',[App\Http\Controllers\AgendaController::class,'agendaUpdate']);
Route::get('/agenda/delete/{id}',[App\Http\Controllers\AgendaController::class,'agendaDelete']);

//Cliente funções
Route::get('/cliente', [App\Http\Controllers\ClientesController::class, 'index'])->name('cliente');
Route::get('/cliente/cadastro', [App\Http\Controllers\ClientesController::class, 'cadastro'])->name('cadastro');
Route::post('/cliente/salvar',[App\Http\Controllers\ClientesController::class,'salvar'])->name('salvar.cliente');

Route::get('/cliente/edit/{id}',[App\Http\Controllers\ClientesController::class,'clienteEdit']);
Route::post('/cliente/update/{id}',[App\Http\Controllers\ClientesController::class,'clienteUpdate']);
Route::get('/cliente/delete/{id}',[App\Http\Controllers\ClientesController::class,'clienteDelete']);


//Serviços funções
Route::get('/servicos', [App\Http\Controllers\ServicosController::class, 'index'])->name('servico');
Route::get('/servicos/cadastro', [App\Http\Controllers\ServicosController::class, 'cadastro'])->name('cadastro');
Route::post('/servico/salvar',[App\Http\Controllers\ServicosController::class,'salvar'])->name('salvar.servico');

Route::get('/cliente/edit/{id}',[App\Http\Controllers\ClientesController::class,'clienteEdit']);
Route::post('/cliente/update/{id}',[App\Http\Controllers\ClientesController::class,'clienteUpdate']);
Route::get('/cliente/delete/{id}',[App\Http\Controllers\ClientesController::class,'clienteDelete']);