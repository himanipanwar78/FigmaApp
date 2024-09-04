<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Models\Form;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

 //Route::get('/', [WelcomeController::class, 'showWelcomeFile']);
 //Route::post('/', [WelcomeController::class, 'formSubmit']);
 
 Route::get('/', function () {
    return view('welcome');
});
Route::post('/form/store', [WelcomeController::class, 'store'])->name('form.store');


Route::post('/login', [WelcomeController::class, 'login'])->name('login');




Route::get('/login', [WelcomeController::class, 'showloginForm']);
Route::get('/fitnessgoal', [WelcomeController::class, 'showFitnessgoal'])->name('fitnessgoal')->middleware('auth');
Route::get('/fitnessguide', [WelcomeController::class, 'showFitnessguide'])->middleware('auth');
Route::post('/logout', [WelcomeController::class, 'logout'])->name('logout');
