<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('customers/', [CustomerController::class, 'all']);
Route::get('customer/{id^}', [CustomerController::class, 'one']);
Route::post('customer/', [CustomerController::class, 'add']);
Route::put('customer/{id}', [CustomerController::class, 'change']);
Route::delete('customer/{id}', [CustomerController::class, 'delete']);
