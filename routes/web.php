<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\СontactController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::controller(WelcomeController::class)->group(function () {
    Route::get('/find/', 'index')->name('index');
    Route::get('/find/{id}', 'find')->name('find');
    Route::get('/', 'index')->name('index');

    Route::get('/alphabet/{id}', 'alphabet')->name('alphabet');
    Route::get('/loyiha_haqida/','loyiha');
    Route::get('/contact', 'contact');

    Route::post('/', 'store');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return  redirect()->to('/lugat');
//        return Inertia::render('Dashboard');
    })->name('dashboard');
    Route::resource('loyihe', \App\Http\Controllers\LoyihaController::class);
    Route::resource('lugat', \App\Http\Controllers\LugatController::class);

    Route::controller(СontactController::class)->group(function (){
        Route::get( '/contact/{id}/edit', 'edit')->name('contact.edir');
    });

});
