<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'MainController@home')
->name('home');

Route::get('/pilot/{id}', 'MainController@pilot')
-> name('pilot');

Route::get('/car/new', 'MainController@createCar')
-> name('new-car');

Route::post('/car/store', 'MainController@storeCar')
->name('store-car');
