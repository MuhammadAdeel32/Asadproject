<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard;
use App\Livewire\Login;


Route::get('/asad',Dashboard::class);
Route::get('/',Login::class);