<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
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
Route::get('/movies',function(){
    $movies = DB::select('select * from movie');
    return $movies;
});
Route::post('/check_login',[LoginController::class,'login']);
Route::get('/',[MainController::class,'index']);
Route::get('/login', [LoginController::class,'show']);
Route::get('/success_login', [LoginController::class,'Success_Login']);
Route::get('/logout', [LoginController::class,'logout']);
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

