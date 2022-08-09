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
    return view('home',[
        'page_name' => 'My Home Page','name' => 'Learning Laravel Course'
    ]);

})->name("home");
Route::get('/about-us', function () {
    return view("about",[
        'page_name' => 'My About Page','name' => 'Learning Laravel Course'
    ]);
})->name("about");
Route::get('/contact-page', function () {
    $page_name = "Contact Page";
    $mobile = "01881166493";
    return view("contact",compact('page_name','mobile'));
})->name("contact");
Route::get('/service-page', function () {

    $services = [
        'Web Design',
        'Web Development',
        'App Development',
        'Business Deal'
    ];



    return view("service",compact('services'));
})->name("service");

// Route::get('/search/{keywords}', function ($keywords) {
//     echo "$keywords";
// })->where("keywords" , ".*");
