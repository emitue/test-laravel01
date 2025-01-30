<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestController;

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

Route::get('/confirm', [ContactController::class, 'index']);
Route::get('/', [TestController::class, 'admin']);
Route::get('/default', [ContactController::class, 'default']);

Route::get('/default', [ContactController::class, 'default']);
Route::post('/default', [ContactController::class,'create']);
Route::get('/', [ContactController::class, 'admin']);

Route::get('/index', function () {
    return view('index');
});
Route::get('/confirm', function () {
    return view('confirm');
});
Route::get('/thanks', function () {
    return view('thanks');
});
Route::get('/', function () {
    return view('admin');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});