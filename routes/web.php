<?php

use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
     echo "RH Management";
});


Route::get('/email', function () {
     Mail::raw('Mensaje de prueba de RH Management', function(Message $message){

          $message->to('teste@gmail.com')
          ->subject('Bienvenido a RH Management')
          ->from('rh@rhmanagement.com');
     });

     echo "Correo enviado existosamente";
});





