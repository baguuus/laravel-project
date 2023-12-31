<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

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
    return view('welcome');
});

Route:: get('info', function() {
    echo 'info';
});

Route:: get('register', function() {
    return view('register');
});

Route::get('/show', [NewsController::class,'show']);
Route::get('/create', [NewsController::class,'create']);
