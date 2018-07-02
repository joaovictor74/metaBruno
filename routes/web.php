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
//site
Route::get('/',['as'=>'site.index','uses'=> 'Controller@index']);
Route::get('/institucional',['as'=>'site.institucional','uses'=> 'Controller@institucional']);
Route::get('/grade',['as'=>'site.grade','uses'=> 'Controller@grade']);
Route::get('/extensao',['as'=>'site.extensao','uses'=> 'Controller@extensao']);
Route::get('/eventos',['as'=>'site.eventos','uses'=> 'Controller@eventos']);

Route::get('/aluno',['as'=>'site.aluno','uses'=> 'Controller@loginAluno']);
Route::get('/professor',['as'=>'site.prof','uses'=> 'Controller@loginProf']);
Route::get('/admin',['as'=>'site.admin','uses'=> 'Controller@loginAdmin']);
//auth
Route::resource('authors','AuthorController');

Route::post('/aluno',['as'=>'user.login_Aluno','uses'=> 'DashboardController@auth']);
Route::get('/dashboard',['as'=>'user.dashboard','uses'=> 'DashboardController@index']);

Route::resource('user','UsersController');