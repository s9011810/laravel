<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
//use App\Http\Controllers\VerificationController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\MemberController;
use App\Models\User;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SeatKindController;
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
//Route::get('/movies',function(){
//    $movies = DB::select('select * from movie');
//    return $movies;
//});
Route::post('/check_login',[LoginController::class,'login']);
Route::get('/',[MainController::class,'index']);
Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/login', [LoginController::class,'show'])->name('login');
Route::post('/login', [LoginController::class,'show']);
Route::get('/success_login', [LoginController::class,'Success_Login']);
Route::get('/logout', [LoginController::class,'logout']);
Route::get('register', [RegisterController::class,'show'])->name('register');
Route::post('register', [RegisterController::class,'create'])->name('register');
Route::get('/movie/{id}',[MainController::class,'show_movie_info']);
Route::get('/admin', function () {
    return view('admin/admin_member/admin_member_table');
});
Route::get('/admin_movie', function () {
    return view('admin/admin_movie/admin_movie_info');
});
Route::get('/admin_order', function () {
    return view('admin/admin_order/admin_order_info');
});
Route::get('/find', function () {
    $users = User::all();
    foreach ($users as $user) {
        return $users;
    }
});
Auth::routes(['verify'=>true]);
Route::get('email/verify', [VerificationController::class,'show'])->name('verification.notice');
Route::get('email/verify/{id}', [VerificationController::class,'verify'])->name('verification.verify');
Route::get('email/resend', [VerificationController::class,'send_email'])->name('verification.resend');
Route::post('email/resend', [VerificationController::class,'send_email']);
Route::get('/profile/{id}',[VerificationController::class,'store']);
Route::get('/member_detail/{id}', [MemberController::class,'show'])->middleware('verified');
Route::post('/member_detail/{id}', [MemberController::class,'update'])->middleware('verified');
Route::get('/admin_member/{id}', [AdminController::class,'show_member'])->middleware('verified');
Route::post('/admin_member/{id}', [AdminController::class,'show_member'])->middleware('verified');
Route::get('/admin_member/destroy/{id}', [AdminController::class,'delete_member'])->middleware('verified');
Route::get('/admin_member/check/{id}', [AdminController::class,'check_admin_member'])->middleware('verified');
Route::get('/admin_movie/{id}',[MovieController::class,'show']);
Route::get('/admin_movie/create/{id}', [MovieController::class,'showMovieForm']);
Route::post('/admin_movie/create/{id}', [MovieController::class,'new_Movie']);
Route::post('/admin_movie/update/{id}', [MovieController::class,'edit_update']);
Route::get('/admin_movie/update/{id}', [MovieController::class,'edit_show']);
Route::get('/admin_movie/delete/{id}', [MovieController::class,'delete_movie']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin_theater/seat_kind/create/{id}',[SeatKindController::class,'show']);
Route::post('/admin_theater/seat_kind/create/{id}',[SeatKindController::class,'Seat_Kind']);
