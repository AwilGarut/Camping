<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use Illuminate\Container\Attributes\Auth;


// dd('masuk'); // untuk debugging
// Route::get('/test', function () {
//     return 'TES ROUTE WORKS!';
// });
Route::get('/', function () {
    return view('welcome');
   

});


Route::get('/login', [LoginController::class, 'index'])->name('login');
