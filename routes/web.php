<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
	return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/provisioners', function () {
	return view('livewire.provisioners');
})->name('provisioners');

// Route::get('/provisioners', Provisioners::class);

// Route::get('/provisioners', function () {
// 	return view('livewire.provisioners');
// });