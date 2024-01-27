<?php

use App\Http\Controllers\InscriptionController;
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

Route::resource('inscriptions', InscriptionController::class)->except('create');
Route::get('/', [InscriptionController::class, 'create']);
// Route::get('/paiements', [InscriptionController::class, 'sendEmails'])->name('sendEmails');