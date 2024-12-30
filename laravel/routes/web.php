<?php

use PhpParser\Node\Expr\New_;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'postLogin']);
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::resource('members', MemberController::class);
    Route::resource('news', NewsController::class);
    Route::resource('products', ProductController::class);
    Route::resource('admins', AdminController::class);
});
Route::get('/tes', function(){
    return view('tes');
});