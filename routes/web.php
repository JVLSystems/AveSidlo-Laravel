<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::view('/powergrid', 'powergrid-demo');

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('nasa-spolocnost', [PageController::class, 'about_company'])->name('about.company');
Route::get('sluzby', [PageController::class, 'services'])->name('services');
Route::get('kontakt', [PageController::class, 'contact'])->name('contact');
Route::get('ochrana-osobnych-udajov', [PageController::class, 'privacy_policy'])->name('privacy.policy');
Route::get('obchodne-podmienky', [PageController::class, 'terms_and_conditions'])->name('terms.and.conditions');


Route::middleware('auth')->prefix('klient')->group( function() {

    Route::get('/', [PageController::class, 'client'])->name('client');

    Route::get('moj-ucet', [ClientController::class, 'my_account'])->name('my.account');
    Route::get('nastavenia', [ClientController::class, 'settings'])->name('settings');
    Route::get('zmena-hesla', [ClientController::class, 'change_password'])->name('change.password');

    Route::resource('klient', ClientController::class);
    Route::resource('spolocnosti', CompanyController::class);
    Route::resource('objednavky', OrderController::class);
});

require __DIR__.'/auth.php';
