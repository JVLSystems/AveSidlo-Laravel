<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\InvoiceController;

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

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('nasa-spolocnost', [PageController::class, 'aboutCompany'])->name('about.company');
Route::get('sluzby', [PageController::class, 'services'])->name('services');
Route::get('kontakt', [PageController::class, 'contact'])->name('contact');
Route::get('ochrana-osobnych-udajov', [PageController::class, 'privacyPolicy'])->name('privacy.policy');
Route::get('obchodne-podmienky', [PageController::class, 'termsAndConditions'])->name('terms.and.conditions');

Route::middleware('auth')->prefix('klient')->group( function() {

    Route::get('/', [PageController::class, 'client'])->name('client');

    Route::get('moj-ucet', [ClientController::class, 'myAccount'])->name('my.account');
    Route::get('nastavenia', [ClientController::class, 'settings'])->name('settings');
    Route::get('zmena-hesla', [ClientController::class, 'changePassword'])->name('change.password');

    Route::resource('klient', ClientController::class)->parameters(['klient' => 'user']);
    Route::resource('spolocnosti', CompanyController::class)->parameters(['spolocnosti' => 'company']);
    Route::get('spolocnosti/search-orsr-ico/{ico}', [CompanyController::class, 'getCompanyDetailByIco']);
    Route::resource('objednavky', OrderController::class);
    Route::resource('faktury', InvoiceController::class)->parameters(['faktury' => 'invoice']);
    Route::get('faktury/{invoice}/stiahnut', [InvoiceController::class, 'download'])->name('faktury.download');
});

require __DIR__.'/auth.php';
