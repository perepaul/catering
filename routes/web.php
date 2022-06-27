<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\PasswordController;
use App\Http\Controllers\ContactController as ControllersContactController;
use App\Http\Controllers\IndexController;
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

Route::as('front.')->group(function () {
    Route::get('', IndexController::class)->name('index');
    Route::post('contact', ControllersContactController::class)->name('contact');
});

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::view('', 'admin.dashboard')->name('dashboard');
    Route::controller(PasswordController::class)
        ->prefix('password')->as('password.')
        ->group(function () {
            Route::get('', 'index')->name('index');
            Route::post('change', 'change')->name('change');
        });
    Route::resource('contacts', ContactController::class)->only(['index', 'show', 'destroy']);
});
