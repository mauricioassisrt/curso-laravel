<?php

//Metodos padrão PUT delete post get
Route::get('/', function () {
    return view('welcome');
});
// passando ? ao lado do id? e id=null não da erro ao passar
//contato/ sem nehhuma informacao 
// Route::get('contato/{id?}', function ($id=null) {
//     return 'ID'.$id;
// });

Route::get('contato/{id?}', ['uses'=>'ContatoController@index']);

// Route::post('/contato', function () {
//    dd($_POST);
//     return "Contato POST";
// });

Route::post('/contato', ['uses'=>'ContatoController@criar']);
Route::put('/contato', ['uses'=>'ContatoController@editar']);
// Route::put('/contato', function () {
   
//      return "Contato PUT";
//  });
 