<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Doctor\DoctorController;

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
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('user')->name('user.')->group(function(){

    Route::middleware(['guest','prevent-back-history'])->group(function(){
        Route::view('/login','dashboard.user.login')->name('login');
        Route::view('/register','dashboard.user.register')->name('register');
        Route::post('/create',[UserController::class,'create'])->name('create');
        Route::post('/check',[UserController::class,'check'])->name('check');
    });

    Route::middleware(['auth','prevent-back-history'])->group(function(){
        Route::view('/home','dashboard.user.home')->name('home');
        Route::post('/logout',[UserController::class,'logout'])->name('logout');
    });

});

Route::prefix('admin')->name('admin.')->group(function(){

    Route::middleware(['guest:admin','prevent-back-history'])->group(function(){
        Route::view('/login','dashboard.admin.login')->name('login');
        Route::post('/check',[AdminController::class,'check'])->name('check');
    });

    Route::middleware(['auth:admin','prevent-back-history'])->group(function(){
        Route::view('/home','dashboard.admin.home')->name('home');
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');
        Route::view('/profile','dashboard.admin.profile')->name('profile');
        Route::view('/edit-profile','dashboard.admin.edit-profile')->name('edit-profile');
        Route::post('/pfupdate',[AdminController::class,'pfupdate'])->name('pfupdate');
    });

});

Route::prefix('doctor')->name('doctor.')->group(function(){

    Route::middleware(['guest:doctor','prevent-back-history'])->group(function(){
        Route::view('/login','dashboard.doctor.login')->name('login');
        Route::view('/register','dashboard.doctor.register')->name('register');
        Route::post('/create',[DoctorController::class,'create'])->name('create');
        Route::post('/check',[DoctorController::class,'check'])->name('check');
    });

    Route::middleware(['auth:doctor','prevent-back-history'])->group(function(){
        Route::view('/home','dashboard.doctor.home')->name('home');
        Route::post('/logout',[DoctorController::class,'logout'])->name('logout');
    });
});
