<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/avisos', function (){
    return view('avisos', ['nome' => 'Rossi', 'mostrar' => true,
                'avisos' =>[['id'=> 1, 'aviso' => 'Inicio da aula'],
                            ['id'=> 2, 'aviso' => 'Intervalo'],
                            ['id'=> 3, 'aviso' => 'Final da aula']
                        ]]);
});

Route::get('/index', function () {
    return view('index', ['carousel' => true,
                'forms' => ['', '', '']]);

});


