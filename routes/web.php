<?php
use App\Http\Controllers\CrimeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/crime',CrimeController::class);