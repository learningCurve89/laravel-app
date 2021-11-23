<?php

use App\Http\Controllers\FoxController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
use App\Foo;
use App\Bar;
use App\Moo;

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
})->middleware('sound');

Route::middleware(['auth'])->group(function () {
    Route::view('/admin', 'admin')->name('admin');
});

Route::get('/people', [PersonController::class, 'index'])->name('people.index');

Route::get('/people/create', [PersonController::class, 'create'])
    ->name('people.create')
    ->middleware('auth');

Route::post('/people', [PersonController::class, 'store'])
    ->name('people.store')
    ->middleware('auth');

Route::get('/people/{person}', [PersonController::class, 'show'])
    ->name('people.show')
    ->middleware('throttle:2,2');

Route::delete('/people/{person}', [PersonController::class, 'destroy'])->name(
    'people.destroy'
);

Route::get('/foxes', [FoxController::class, 'index'])->name('foxes.show');

Route::get('/example', [PersonController::class,'example']);

app()->singleton('App\Foo', function ($app) {
    return new Foo(new Bar(new Moo()));
});
