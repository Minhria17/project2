<?php

use App\Http\Controllers\User\Home2Controller;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\classroomController;
use App\Http\Controllers\login;
use App\Http\Controllers\Schedule2Controller;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\Student2Controller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudytimeController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Routing\RouteFileRegistrar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;

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





use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\Auth\loginController as AuthLoginController;
use App\Http\Controllers\User\HomeController;
Route::get('/', function () {
    return view('admin/login/index');
});
Route::get('login', function () {
    return view('user/login/index');
});
Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('login');
Route::middleware('auth')->group(function (){
    Route::get('welcome2', [Home2Controller::class, 'index']);
});
Route::get('/logout',[LoginController::class, 'logout'])     ->name('user.logout');



Route::get('gioithieu', function () {
    return view('user/gioithieu/index');
});

Route::resource('student',StudentController::class);
Route::resource('teacher',TeacherController::class);
Route::resource('classroom',classroomController::class);
Route::resource('studytime',StudytimeController::class);
Route::resource('schedule',ScheduleController::class);
Route::resource('subject',SubjectController::class); 


Route::get('attendance',[AttendanceController::class,"checkIn"])->name('checkIn');
Route::post('attendance',[AttendanceController::class,"postcheckIn"])->name('hi');
Route::get('/get-user-in-class/{id_classroom}', [AttendanceController::class,"getUserByClass"])->name('user.in.class');

Route::resource('student2',Student2Controller::class);
Route::resource('schedule2',Schedule2Controller::class);
Route::get('search', [SearchController::class,'index']);
Route::get('/search',[SearchController::class,'search']);

