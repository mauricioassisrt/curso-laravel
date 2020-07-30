<?php

//Metodos padrão PUT delete post get

use Illuminate\Support\Facades\Route;


// passando ? ao lado do id? e id=null não da erro ao passar
//contato/ sem nehhuma informacao 
// Route::get('contato/{id?}', function ($id=null) {
//     return 'ID'.$id;
// });


// Route::post('/contato', function () {
//    dd($_POST);
//     return "Contato POST";
// });

// Route::put('/contato', function () {
   
//      return "Contato PUT";
//  });
//rota home
Route::get('/', ['as'=>'site.home', 'uses'=> 'Site\HomeController@index']); 

//login
Route::get('/login', ['as'=>'site.login', 'uses'=> 'Site\LoginController@index']); 
Route::get('/login/entrar', ['as'=>'site.login.entrar', 'uses'=> 'Site\LoginController@entrar']); 

//rota contato
Route::get('contato/{id?}', ['uses'=>'ContatoController@index']);
Route::post('/contato', ['uses'=>'ContatoController@criar']);
Route::put('/contato', ['uses'=>'ContatoController@editar']);
//rotas cursos 
Route::get('/admin/cursos', ['as'=>'admin.cursos', 'uses'=> 'Admin\CursoController@index']);
Route::get('/admin/cursos/adicionar', ['as'=>'admin.cursos.adicionar', 'uses'=> 'Admin\CursoController@adicionar']);
Route::post('/admin/cursos/salvar', ['as'=>'admin.cursos.salvar', 'uses'=> 'Admin\CursoController@salvar']);
Route::get('/admin/cursos/editar/{id}', ['as'=>'admin.cursos.editar', 'uses'=> 'Admin\CursoController@editar']);
Route::put('/admin/cursos/atualizar/{id}', ['as'=>'admin.cursos.atualizar', 'uses'=> 'Admin\CursoController@atualizar']);
Route::get('/admin/cursos/deletar/{id}', ['as'=>'admin.cursos.deletar', 'uses'=> 'Admin\CursoController@deletar']);