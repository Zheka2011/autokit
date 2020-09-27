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

Route::middleware(['auth:sanctum', 'verified'])->get('/orders', function () {
	return view('livewire.orders');
})->name('orders');

Route::middleware(['auth:sanctum', 'verified'])->get('/store', function () {
	return view('livewire.store');
})->name('store');
