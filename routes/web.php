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

//auth
Route::prefix('aluno')->group(function(){
    Route::get('/login',['as'=>'aluno.login','uses'=> 'Controller@loginAluno']);
    Route::post('/login',['as'=>'aluno.login','uses'=> 'DashboardController@authAluno']);
    Route::get('/',['as'=>'site.aluno-in','uses'=> 'DashboardController@index']);
});

Route::prefix('professor')->group(function(){
    Route::get('login',['as'=>'site.prof','uses'=> 'Controller@loginProf']);
});

Route::prefix('admin')->group(function(){
    Route::get('/login',['as'=>'admin.login','uses'=> 'AdminController@showLoginForm']);
    Route::post('/login',['as'=>'admin.login_Adm','uses'=> 'AdminController@login']);
    Route::get('/',['as'=>'admin.dashboard','uses'=> 'AdminController@index']);
});
 
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
