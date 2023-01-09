<?php

use App\Http\Controllers\ComicsController;
use App\Models\comics;
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

// Route::get('/comics', [ComicsController::class, 'index'])->name('index');
// Route::get('/comics/{comic}', [ComicsController::class, 'show'])->name('show');
// Route::get('/create', [ComicsController::class, 'create'])->name('create');
// Route::post('/comics', [ComicsController::class, 'store'])->name('store');
// Route::get('/comics/{comic}/edit', [ComicsController::class, 'edit'])->name('edit');
// Route::put('/comics/{comic}', [ComicsController::class, 'update'])->name('update');
// Route::delete('comics/{comic}', [ComicsController::class, 'destroy'])->name('destroy');
Route::resource('comics', ComicsController::class);

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::get('/comics', ComicsController::class, 'show')->name('comics');

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');
