<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name("home");
Route::get('/about-us', function () {
    return view("about");
})->name("about");
Route::get('/contact-page', function () {
    return view("contact");
})->name("contact");
Route::get('/service-page', function () {
    return view("service");
})->name("service");

// Route::get('/search/{keywords}', function ($keywords) {
//     echo "$keywords";
// })->where("keywords" , ".*");
