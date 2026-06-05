<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home');

Route::view('/about', 'pages.about');

Route::view('/contact', 'pages.contact');

Route::view('/portofolio', 'pages.portofolio');

Route::view('/pricing', 'pages.pricing');

Route::view('/rebootcom', 'pages.rebootcom');

Route::post('/contact/send', [\App\Http\Controllers\ContactController::class, 'send']);