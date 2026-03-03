<?php
// use App\Http\Controllers\ProductController;

// Route::resource('products', ProductController::class);

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
