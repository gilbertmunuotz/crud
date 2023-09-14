<?php

use App\Http\Controllers\offerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfferingController;
use GuzzleHttp\Promise\Create;

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

Route::get('/', function () {return view('welcome');});

                #Treasurer
Route::get('/offerings', [OfferingController::class, 'index'])->name('offering.index');
Route::get('/offerings/create', [OfferingController::class, 'create'])->name('offering.create');
Route::post('/offerings', [OfferingController::class, 'store'])->name('offering.store');
Route::get('/offerings/{offering}/edit', [OfferingController::class, 'edit'])->name('offering.edit');
Route::put('/offerings/{offering}/update', [OfferingController::class, 'update'])->name('offering.update');
Route::get('/offering/{offering}/delete', [OfferingController::class, 'delete'])->name('offering.delete');

              