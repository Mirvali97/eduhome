<?php

use App\Http\Controllers\BaseController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;
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

Route::view('/', 'welcome');
Route::get('/', [BaseController::class,'address']);
Route::get('/single/{id}',[BaseController::class,'SinglePost'])->name('single_post');
Route::get('/blog', [BaseController::class,'posts'])->name('blog');
Route::get('/read/{id}', [BaseController::class,'PostRead'])->name('read');


//signup routes
Route::get('sign', [StudentController::class,'sign'])->name('signup');
Route::post('store', [StudentController::class,'store'])->name('store');
Route::post('login_d', [StudentController::class,'LoginDashboard'])->name('login_process');
Route::get('login', [StudentController::class,'login'])->name('login');

Route::get('/dashboard',[StudentController::class,'Dashboard']);

//admin voyager prefix route
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
