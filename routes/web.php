<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

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
// Route::resource('/porto', [\App\Http\Controllers\WebController::class, 'post']);
// Route::resource('/contact', [\App\Http\Controllers\WebController::class, 'contact']);

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

// Route::get('/portfolios/{post:slug}', [App\Http\Controllers\PortfolioController::class, 'show']);

Route::resource('/portfolios', \App\Http\Controllers\PortfolioController::class);


// Route::get('/', 'PostController@index');
// /*Route::get('/isi_post', function(){
// 	return view('blog.isi_post');
// });*/
// Route::get('/isi-post/{slug}', 'PostController@isi_blog')->name('blog.isi');
// Route::get('/list-post','PostController@list_blog')->name('blog.list');
// Route::get('/cari',PostController@cari')->name('blog.cari');