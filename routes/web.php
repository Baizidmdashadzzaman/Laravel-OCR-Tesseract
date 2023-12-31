<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OCRController;
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


Route::get('/', [OCRController::class, 'index'])->name('index');
Route::post('/ocr', [OcrController::class, 'ocr'])->name('ocr');