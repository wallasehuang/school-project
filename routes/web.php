<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;
use App\Http\Controllers\UserController;

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
    return view('home');
})->name('home');

Route::get('/about', [PetController::class, 'index'])->name('about');

Route::post('/favorites', [PetController::class, 'favorites'])->name('favorites');

Route::get('/shelter-info', function(){
    return view('shelter');
})->name('shelter-info');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');


Route::get('pet-data', function(){
    return App\Models\Pet::factory()
        ->times(50)
        ->create();
});
