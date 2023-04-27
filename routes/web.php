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

Auth::routes([
    'register' => false,    //untuk menghilangkan fitur register
    'confirm' => false,
]);

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/admin', function () {
        return view('home');
    });
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/upload', function () {
    return view('admin');
});
Route::get('/upload', [App\Http\Controllers\HomeController::class, 'admin']);
// Route::resource('/upload', [\App\Http\Controllers\WebController::class, 'admin']);
Route::resource('/portfolios', \App\Http\Controllers\PortfolioController::class);