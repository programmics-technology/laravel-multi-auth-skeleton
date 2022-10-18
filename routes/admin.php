<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\SettingController;

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

//Auth Routes
Route::get('/', [LoginController::class, 'showLoginForm'])->name('/');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/login', [LoginController::class, 'login'])->name('admin.login');
Route::post('/logout', [LoginController::class, 'logout'])->name('admin.logout');

//Home Routes
Route::get('/home', [HomeController::class, 'index'])->name('admin.home');

//Profile & Password Route
Route::post('/password/update', [HomeController::class, 'password_update'])->name('admin.password.update');

//User Route
Route::get('/users', [UserController::class, 'index'])->name('admin.users');
Route::get('/users/data', [UserController::class, 'data'])->name('admin.users.data');
Route::post('/users/status', [UserController::class, 'status'])->name('admin.users.status');

//Notification Route
Route::get('/notifications', [NotificationController::class, 'index'])->name('admin.notifications');
Route::get('/notifications/data', [NotificationController::class, 'data'])->name('admin.notifications.data');
Route::post('/notifications', [NotificationController::class, 'store'])->name('admin.notifications.store');

//Setting Route
Route::get('/settings', [SettingController::class, 'index'])->name('admin.settings');
Route::get('/settings/data', [SettingController::class, 'data'])->name('admin.settings.data');
Route::post('/settings/update', [SettingController::class, 'update'])->name('admin.settings.update');
