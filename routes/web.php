<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Mail\Message;

Route::get('/email', function () {

    Mail::raw('Teste de email!', function (Message $message) {
        $message->to('teste@gmail.com')
            ->subject('Bem-vindo ao RH MANGNT!')
            ->from('rh@rhmangnt.com');
    });

    echo 'Email enviado com sucesso!';
});
