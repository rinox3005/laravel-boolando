<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data = [
        'title' => 'Home Page',
    ];
    return view('home', $data);
})->name('home');

Route::get('/products', function () {
    $data = [
        'title' => 'Products',
        'products' => config('products'),
    ];
    return view('products', $data);
})->name('products');

Route::get('/about', function () {
    $data = [
        'title' => 'About Us',
    ];
    return view('about', $data);
})->name('about');
