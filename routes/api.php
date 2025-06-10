<?php

use App\Models\Empleado;
use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/empleado', function (Request $request) {
    return Empleado::with("persona")->find(1);
    //return Persona::with("empleado")->find(1);
});
