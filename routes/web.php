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
    return view('index/movie_info');
});
Route::get('/login', function () {
    return view('login/login_info');
});
Route::get('/register', function () {
    return view('register/register_info');
});
Route::get('/movie', function () {
    return view('movie/movie_info');
});
Route::get('/admin', function () {
    return view('admin/admin_member/admin_member_table');
});
Route::get('/admin_movie', function () {
    return view('admin/admin_movie/admin_movie_info');
});
Route::get('/admin_order', function () {
    return view('admin/admin_order/admin_order_info');
});
