<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\RequestSurveyController;
use App\Http\Controllers\Api\SiteSurveyController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * route "/register"
 * @method "POST"
 */
// Route::post('/register', App\Http\Controllers\Api\RegisterController::class)->name('register');
Route::post('register', [AuthController::class, 'register']);
/**
 * route "/login"
 * @method "POST"
 */
// Route::post('/login', App\Http\Controllers\Api\LoginController::class)->name('login');
Route::post('login', [AuthController::class, 'login']);
/**
 * route "/user"
 * @method "GET"
 */
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

/**
 * route "/logout"
 * @method "POST"
 */
// Route::post('/logout', App\Http\Controllers\Api\LogoutController::class)->name('logout');
Route::post('logout', [AuthController::class, 'logout']);

Route::middleware(['auth:api', 'api'])->group(function () {
    Route::get('user', [AuthController::class, function (Request $request) {
        return $request->user();
    }]);
    Route::resource('user', UserController::class);
    Route::resource('customer', CustomerController::class);
    Route::resource('request-survey', RequestSurveyController::class);
    Route::resource('site-survey', SiteSurveyController::class);
});