<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;

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

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/about_me', function () {
    return view('about_me');
});

Route::get('/lp1', function () {
    return view('lp1');
});

// Login routes
Route::get('/login', function () {
    return view('auth.login');
});
Route::post('/login', [AuthenticationController::class, 'login'])->name('login');

// Registration routes
Route::get('/register', function () {
    return view('auth.registration');
})->name('register');
Route::post('/register', [AuthenticationController::class, 'register'])->name('register');

// Dashboard routes (make sure you have a dashboard() method in your AuthenticationController)
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [AuthenticationController::class, 'dashboard']);
    Route::get('/admin/update-profile', [AuthenticationController::class, 'dashboard']);
});

// Voyager admin routes
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

