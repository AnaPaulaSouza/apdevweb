<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/loginPage', function () {
    return view('login', ['title' => 'Login']);
});

Route::get('/cadastro', function () {
    return view('cadastro', ['title' => 'Cadastro']);
});

Route::get('/contato', function () {
    return view('contato', ['title' => 'Contato']);
});

Route::get('/sobre', function () {
    return view('sobre', ['title' => 'Sobre']);
});

Route::get('/minhasMaterias', function () {
    return view('minhasMaterias', ['title' => 'minhasMaterias']);
});

Route::get('/recuperarSenha', function () {
    return view('recuperarSenha', ['title' => 'Recuperar Senha']);
});

Route::resource('messages', 'MessageController')->only([
    'store'
]);

Route::get('/mensagemSucesso', function() {
    return view('mensagemSucesso', ['title' => __('messages.messageSentSuccessfully')]);
});

Route::get('/paginaInicial', function() {
    return view('paginaInicial');
})->middleware('auth');

Auth::routes();
