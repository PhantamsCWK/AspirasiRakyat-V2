<?php

use App\Http\Livewire\Home;
use App\Http\Livewire\Aspirasi;
use App\Http\Livewire\Penduduk;
use App\Http\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\loginController;

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

Route::get('/', Home::class);
Route::get('/home', Home::class)->name('home');
Route::controller(loginController::class)->group(function () {
    Route::post('/', 'login');
    Route::post('/home', 'login');
});

Route::get('/aspirasi', Aspirasi::class)->name('aspirasi');

Route::get('/dashboard', Dashboard::class)->middleware('auth')->name('dashboard');
Route::get('/penduduk', Penduduk::class)->middleware('auth')->name('penduduk');

