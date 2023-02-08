<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Nitrition\NitritionController;
use App\Http\Controllers\Workout\WorkoutController;
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
    return view('admin.auth.login');
})->name('start');

Route::group(['prefix'=>'user',],function (){
   Route::get('/register',[UserController::class,'email_register_show'])->name('email_register');
   Route::post('/register/email',[UserController::class,'insert_email_data'])->name('register');

});


Route::group(['prefix'=>'workout',],function (){
    Route::get('/register/{id}',[WorkoutController::class,'workout_register_show'])->name('workout_register');
    Route::post('/register/data',[WorkoutController::class,'insert_workout_data'])->name('workout');
});

Route::group(['prefix'=>'nutrition',],function (){
    Route::get('/register/{id}',[NitritionController::class,'nut_register_show'])->name('nut_register');
    Route::post('/register/data',[NitritionController::class,'insert_nut_data'])->name('nutrition');
});


Route::group(['prefix'=>'dashboard',],function (){
    Route::post('/login',[DashboardController::class,'login'])->name('login');
    Route::get('/main',[DashboardController::class,'show_dashboard'])->name('dashboard');
    Route::get('/logout',[DashboardController::class,'logout'])->name('logout');

});
