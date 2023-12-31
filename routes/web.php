<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\invoiceController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('invoice', [invoiceController::class, 'store'])->name('store');

Route::get('/invoice', function () {
    return view('invoice');
})->middleware(['auth', 'verified'])->name('invoice');


Route::get('/invoice', [invoiceController::class, 'getInvoice'])->name('invoice');

//End Invoice

Route::get('/status', function () {
    return view('status');
})->middleware(['auth', 'verified'])->name('status');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
