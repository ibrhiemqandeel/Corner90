<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider or the bootstrap/app.php
| file depending on your Laravel version. Now create something great!
|
*/

// المسار الرئيسي للموقع الذي يوجه إلى دالة index داخل PagesController
Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('article', [PagesController::class, 'article'])->name('article');;
Route::get('fixtures', [PagesController::class, 'fixtures'])->name('fixtures');;
Route::get('match', [PagesController::class, 'match'])->name('match');;
Route::get('news', [PagesController::class, 'news'])->name('news');;
Route::get('standings', [PagesController::class, 'standings'])->name('standings');;
