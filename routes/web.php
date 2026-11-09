<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);
Route::get('/galery/{name}', [MainController::class, 'show_image']);
Route::get('/signin', [AuthController::class, 'create']);
Route::post('/signin', [AuthController::class, 'registration']);

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
