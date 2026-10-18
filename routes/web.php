<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contacts', function () {
    $contactsData = [
        'Телефон' => '+7 (999) 123-45-67',
        'Email' => 'ne_scam@yandex.ru',
        'Адрес' => 'г. Москва, ул. Пушкина, д. Колотушкина',
        'График работы' => '24/7',
    ];

    return view('contacts', ['contacts' => $contactsData]);
});
