<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('logout-employee', [AuthController::class, 'logoutEmployee'])->name('logout.employee');
