<?php

use App\Http\Controllers\MainController;
use App\Livewire\FullPageComponent;
use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;

Route::get('/', [MainController::class, 'home']);
Route::get('/clients', [MainController::class, 'showClients']);
Route::get('/fullpage/{number1}/{number2}', FullPageComponent::class);

//Route::get('/counter',Counter::class);
