<?php

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
});

Route::group(['prefix'=>'user',],function (){
   Route::get('/register',[UserController::class,'email_register_show'])->name('email_register');
   Route::post('/register/email',[UserController::class,'insert_email_data'])->name('register');

});


Route::group(['prefix'=>'workout',],function (){
    Route::get('/register/{id}',[WorkoutController::class,'workout_register_show'])->name('workout_register');
    Route::post('/register/data',[WorkoutController::class,'insert_workout_data'])->name('workout');
});

Route::group(['prefix'=>'nutrition',],function (){
    Route::get('/breakfast',[NitritionController::class,'breakfast_show'])->name('breakfast');
    Route::post('/breakfast',[NitritionController::class,'insert_breakfast_data'])->name('breakfast_post');
});
