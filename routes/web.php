<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SecretController;
use Illuminate\Console\View\Components\Secret;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/new', [SecretController::class, 'NewSecret'])->name('new');
Route::get('/new', [SecretController::class, 'ShowLink'])->name('showLink');
Route::get('/secret/{id}', [SecretController::class, 'ShowSecret'])->name('showSecret');
Route::get('/expired', [SecretController::class, 'ShowExpired'])->name('expired');