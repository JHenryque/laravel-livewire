<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;

Route::get('/', [MainController::class, 'home']);
Route::get('/clients', [MainController::class, 'showClients']);

//Route::get('/counter',Counter::class);
