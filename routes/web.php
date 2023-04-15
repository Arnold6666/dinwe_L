<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Auth;
use Illuminate\Http\Request;


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
Route::get('/getRes/{id}', [ResturantsContoller::class, 'show']);
Route::get('/getToken',[NewsController::class, 'getToken']);
Route::get('/uploadRes',function () {return view('uploadRes');});

Route::post('/register', [MemberController::class, 'register']);
Route::post('/uploadnews', [NewsController::class, 'uploadNews']);
Route::post('/updateNew', [NewsController::class, 'updateNew']);
Route::post('/storeRes', [ResturantsContoller::class, 'store']);
Route::post('/storeOrder', [M_ordersController::class, 'store']);
// Route::middleware(['web', 'csrf'])->group(function () {
//     Route::post('/uploadnews', [NewsController::class, 'uploadNews']);
//     // 在此加入其他需要驗證 CSRF token 的路由
// });
// Route::post('/uploadProduct',[ProductController::class, 'uploadproduct']);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
