<?php

//Metodos padrão PUT delete post get
Route::get('/', function () {
    return view('welcome');
});
// passando ? ao lado do id? e id=null não da erro ao passar
//contato/ sem nehhuma informacao 
Route::get('contato/{id?}', function ($id=null) {
    return 'ID'.$id;
});

Route::post('/contato', function () {
   dd($_POST);
    return "Contato POST";
});
Route::put('/contato', function () {
   
     return "Contato PUT";
 });
 