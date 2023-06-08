<?php


use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\Profile\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Status\StatusController;
use App\Http\Controllers\Workout\WorkoutController;
use App\Http\Controllers\HomePage\HomePageController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Nitrition\NitritionController;
use App\Http\Controllers\Profile\UserProfileController;

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

Route::post('edit', [ProfileController::class, 'Edit'])->name('Edit');
Route::get('edit', [ProfileController::class, 'showEdit'])->name('showEdit');
Route::get('profile', [ProfileController::class, 'showProfile'])->name('myprofile');
Route::get('followers', [ProfileController::class, 'follower'])->name('followers');
Route::get('following', [ProfileController::class, 'following'])->name('following');
Route::get('dashboard/main2', [PostController::class, 'storeComment'])->name('storeComment');
Route::get('get/comments/{id}', [PostController::class, 'getComments'])->name('getComments');
Route::get('get/search', [PostController::class, 'showsearch'])->name('search');

Route::get('/', [HomePageController::class, 'get_login'])->name('get_login')->middleware('Are_You_in_HomePage?');
Route::post('/', [HomePageController::class, 'post_login'])->name('post_login');
Route::get('/logout', [HomePageController::class, 'logout'])->name('logout');

Route::group(['prefix' => 'user',], function () {
    Route::get('/register', [UserController::class, 'email_register_show'])->name('email_register');
    Route::post('/register', [UserController::class, 'insert_email_data'])->name('register');
    Route::post('workout/register/data', [WorkoutController::class, 'insert_workout_data'])->name('workout');
    Route::post('nutrition/register/data', [NitritionController::class, 'full_registration'])->name('nutrition');
});

Route::group(['middleware' => 'Are_You_Login?'], function () {


    Route::group(['prefix' => 'post'], function () {
        Route::get('create/post', [PostController::class, 'showCreatePost'])->name('showCreatePost');
        Route::post('create/post', [PostController::class, 'storePost'])->name('storePost');
    });


    Route::group(['prefix' => 'workout'], function () {
        //Route::get('/register/{id}', [WorkoutController::class, 'workout_register_show'])->name('workout_register');

        Route::get('/plan_workout', [WorkoutController::class, 'Plan_Workout'])->name('plan_workout');
    });


    Route::group(['prefix' => 'nutrition'], function () {
        //Route::get('/register/{id}', [NitritionController::class, 'nut_register_show'])->name('nut_register');

        Route::get('/show', [NitritionController::class, 'Plan_Nutrition'])->name('nut_show');
    });


    Route::group(['prefix' => 'dashboard'], function () {

        Route::get('/main', [DashboardController::class, 'show_dashboard'])->name('dashboard');
        Route::get('/profile/{id}', [UserProfileController::class, 'show_profile'])->name('Profile-follow');
    });

    Route::group(['prefix' => 'status'], function () {
        Route::get('/data', [StatusController::class, 'get_status'])->name('status');
    });
});
