<?php

use App\Http\Controllers\MainPage\MainPageController;
use App\Http\Controllers\News\NewsPageController;
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

Route::get('/', [MainPageController::class, 'getPage'])->name('main');
Route::prefix('news')->group(function () {
    Route::get('/', [NewsPageController::class, 'getPage'])->name('news');
    Route::get('/{slug}', [NewsPageController::class, 'getOnePage'])->name('news.get.one');
});

