<?php

use Illuminate\Support\Facades\Route;
use App\Livewire as Controller;

Route::middleware('auth')->group(function () {
  Route::get('/', Controller\Home::class)->name('home');
  Route::get('/muatan', Controller\Muatan::class)->name('muatan');
  Route::get('/users', Controller\Users\Index::class)->name('users');

  Route::post('/logout', function () {

    \Illuminate\Support\Facades\Auth::logout();
    return redirect()->route('login');
  })->name('logout');
});

Route::middleware('guest')->group(function () {
  Route::get('/login', Controller\Authenticate\Login::class)->name('login');
});
