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

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal']);

Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato']);

Route::get('/sobre-nos', [App\Http\Controllers\SobreNosController::class, 'sobreNos']);

Route::get('/login', [App\Http\Controllers\LoginController::class, 'login']);

Route::get('/register', [App\Http\Controllers\RegisterController::class, 'register']);

Route::get('/recover', [App\Http\Controllers\RecoverController::class, 'recover']);

Route::prefix('app')->Group(function(){

    Route::get('/generate', [App\Http\Controllers\generateController::class, 'generate'])->name('app.generate');

    Route::get('/list', [App\Http\Controllers\listController::class, 'list']) ->name('app.list');
});

