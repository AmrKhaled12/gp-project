<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Status\StatusController;
use App\Http\Controllers\Workout\WorkoutController;
use App\Http\Controllers\HomePage\HomePageController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Nitrition\NitritionController;

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

 Route::get('/test/liveware', function () {
     return view('admin.testLiveware');
 });

Route::get('/', [HomePageController::class, 'get_login'])->name('get_login')->middleware('Are_You_in_HomePage?');
Route::post('/', [HomePageController::class, 'post_login'])->name('post_login');
Route::get('/logout', [HomePageController::class, 'logout'])->name('logout');

Route::group(['prefix' => 'user',], function () {
    Route::get('/register', [UserController::class, 'email_register_show'])->name('email_register');
    Route::post('/register', [UserController::class, 'insert_email_data'])->name('register');
    Route::post('workout/register/data', [WorkoutController::class, 'insert_workout_data'])->name('workout');
    Route::post('nutrition/register/data', [NitritionController::class, 'insert_nut_data'])->name('nutrition');
});


Route::group(['prefix' => 'workout', 'middleware' => 'Are_You_Login?'], function () {
    //Route::get('/register/{id}', [WorkoutController::class, 'workout_register_show'])->name('workout_register');

    Route::get('/plan_workout', [WorkoutController::class, 'plan_workout'])->name('plan_workout');
});

Route::group(['prefix' => 'nutrition', 'middleware' => 'Are_You_Login?'], function () {
    //Route::get('/register/{id}', [NitritionController::class, 'nut_register_show'])->name('nut_register');

    Route::get('/show', [NitritionController::class, 'show_breakfast'])->name('nut_show');
});

Route::group(['prefix' => 'dashboard', 'middleware' => 'Are_You_Login?'], function () {
    Route::get('/main', [DashboardController::class, 'show_dashboard'])->name('dashboard');
});

Route::group(['prefix' => 'status', 'middleware' => 'Are_You_Login?'], function () {
    Route::get('/data', [StatusController::class, 'get_status'])->name('status');
});
