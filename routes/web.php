<?php

use App\Http\Livewire\Aspirasi;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Home;
use App\Http\Livewire\Penduduk;
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

Route::get('/', Home::class);
Route::get('/home', Home::class)->name('home');

Route::get('/aspirasi', Aspirasi::class)->name('aspirasi');

Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/penduduk', Penduduk::class)->name('penduduk');

