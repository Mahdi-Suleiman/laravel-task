<?php

use App\Http\Controllers\ArrayTaskController;
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
    return view('welcome');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/arrayTask', [ArrayTaskController::class, 'index']);

Route::any('/emptyRoute', function () {
    return 'henlo wrold';
});

Route::match(['get', 'post'], '/emptyRoute', function () {
    return 'henlo wrold';
});

route::redirect('redirect', 'emptyRoute');

Route::get('/user/{id?}', function ($id = 1) {
    return 'User ' . $id;
})->where('id', '[0-9]+');