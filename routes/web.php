<?php

use App\Http\Controllers\Templatecontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),   'verified',])->group(function () {
    Route::get('/dashboard', [Templatecontroller::class, 'dashboard'])->name('dashboard');
    Route::get('/tables', [Templatecontroller::class, 'tables'])->name('tables');
    Route::get('/billing', [Templatecontroller::class, 'billing'])->name('billing');
    Route::get('/profile', [Templatecontroller::class, 'profile'])->name('profile_page');
});
