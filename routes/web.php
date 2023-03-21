<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', [\App\Http\Controllers\WebController::class, 'welcome']);

Route::get('/admin', function() {
    return view('admin');
});
Auth::routes([
    'register' => false,    //untuk menghilangkan fitur register
    'confirm' => false,

]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
