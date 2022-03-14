<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\ProfileController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::prefix('/dashboard')->group(function(){

    Route::get('/',[BackendController::class,'index'])->name('dashboard.index');
});

Route::prefix('/student')->group(function(){
    Route::get('/',[FrontendController::class,'index'])->name('frontend.index');
    Route::get('/profile',[ProfileController::class,'index'])->name('frontend.profile.index');
});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
