<?php

use App\Http\Controllers\Lat1Controller;
use Illuminate\Support\Facades\Route;

// {{-- NIM 1301223033 NAMA FAHMI ALDZADDI --}}
Route::get("/lat1", [Lat1Controller::class, "index"]);

Route::get('/lat1/m2', [Lat1Controller::class, 'method2']);
