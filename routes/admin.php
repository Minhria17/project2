<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('admin.login');
Route::middleware('auth:admin')->group(function (){
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');

});
Route::get('/logout',[LoginController::class, 'logout'])     ->name('admin.logout');
// Route::group(['middleware' => 'auth'], function(){
//     Route::get('/', [StudentController::class, 'index'])->name('dashboard');
// });