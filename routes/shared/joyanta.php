<?php

use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/role', RoleController::class);
Route::get('/role/show', [RoleController::class, 'show'])->name('role.show');