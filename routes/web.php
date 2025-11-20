<?php

use App\Livewire\Homepage;
use App\Livewire\RegisterPage;
use App\Models\Record;
use Illuminate\Support\Facades\Route;




Route::get('/', Homepage::class)->name('home');
Route::get('/register', RegisterPage::class)->name('register');
Route::post('/register-form', [RegisterPage::class, 'submit'])
    ->name('register_form');
Route::get('/api/records', function(){
    $records = Record::all()->map(function($record) {
            return [
                'id'        => $record->id,
                'full_name' => $record->meta_data['full_name'] ?? null,
                'email'     => $record->meta_data['email'] ?? null,
                'phone'     => $record->meta_data['phone'] ?? null,
                'passport'  => $record->meta_data['passport'] ?? null,
                'created_at'=> $record->created_at->toDateTimeString(),
            ];
        });

        return response()->json([
            'success' => true,
            'data'    => $records,
        ]);
});