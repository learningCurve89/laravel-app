<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

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

Route::middleware(['auth'])->group(function () {
    Route::view('/admin', 'admin')->name('admin');
});

Route::get('/people', [PersonController::class, 'index'])->name('people.index');

Route::get('/people/create', [PersonController::class, 'create'])->name('people.create');

Route::post('/people', [PersonController::class, 'store'])->name('people.store');

Route::get('/people/{person}', [PersonController::class, 'show'])
->name('people.show');

Route::delete('/people/{person}', [PersonController::class, 'destroy'])
->name('people.destroy');

