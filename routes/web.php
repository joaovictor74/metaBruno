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
    return view('welcome');
});
Route::resource('authors','AuthorController');
Route::get('aluno',['uses'=> 'Controller@loginAluno']);
Route::post('aluno',['as'=>'uses.login_Aluno','use'=> 'Controller@login_Aluno']);
Route::get('admin',['uses'=> 'Controller@loginAdmin']);
Route::get('professor',['uses'=> 'Controller@loginProfessor']);