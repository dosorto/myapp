<?php

use App\Livewire\Counter;

use App\Livewire\Persona\Persona as Persona;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/persona', Persona::class);

