<?php

use PhpParser\Node\Expr\New_;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::resource('members', MemberController::class);
Route::resource('news', NewsController::class);
Route::resource('products', ProductController::class);
Route::resource('admins', AdminController::class);
