<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Auth;



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
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/uploadNews', function () {return view('uploadNews');});
Route::get('/getNews', [NewsController::class, 'getNews']);
Route::get('/getToken',[NewsController::class, 'getToken']);

Route::post('/register', [MemberController::class, 'register']);
Route::post('/uploadnews', [NewsController::class, 'uploadNews'])->withoutMiddleware(['csrf']);
// Route::middleware(['web', 'csrf'])->group(function () {
//     Route::post('/uploadnews', [NewsController::class, 'uploadNews']);
//     // 在此加入其他需要驗證 CSRF token 的路由
// });
// Route::post('/uploadProduct',[ProductController::class, 'uploadproduct']);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
