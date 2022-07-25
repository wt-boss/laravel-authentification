<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['admin' ,'auth'])->name('dashboard');


Route::middleware(['auth','admin'])->group(function(){

    Route::get("/foo" , "\App\Http\Controllers\Test@foo");
    Route::get("/bar" , "\App\Http\Controllers\Test@bar");
    Route::resource("/posts" , PostController::class);
});
require __DIR__.'/auth.php';
