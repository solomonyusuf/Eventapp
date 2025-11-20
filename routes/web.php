<?php

use App\Livewire\Homepage;
use App\Livewire\RegisterPage;
use Illuminate\Support\Facades\Route;



Route::get('/', Homepage::class)->name('home');
Route::get('/register', RegisterPage::class)->name('register');
Route::post('/register-form', [RegisterPage::class, 'submit'])
    ->name('register_form');
