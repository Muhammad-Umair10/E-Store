<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/shop', function(){
    return view('shop');
})->name('shop');

Route::get('/about-us', function(){
    return view('about-us');
})->name('About');

Route::get('/cart', function(){
    return view('cart');
})->name('cart');

Route::get('/services', function(){
    return view('services');
})->name('services');

Route::get('/blogs', function(){
    return view('blogs');
})->name('blogs');

Route::get('/contact', function(){
    return view('contact');
})->name('contact');

Route::get('/cart',function(){
    return view('cart');
})->name('cart');

Route::get('/checkout',function(){
    return view('checkout');
})->name('checkout');

Route::get('/register', function(){
    return view('register');
})->name('register');

Route::get('/login',function(){
    return view('login');
})->name('login');

// Dashboard links 
Route::get('/Dashboard',function(){
    return view('Dashboard.home');
})->name('home');