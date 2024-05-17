<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', function () {
    return view('start');
});

Route::get('/form', [MainController::class, 'form']);
Route::post('/form/check', [MainController::class, 'form_check'])->name('thank');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index']);
});

