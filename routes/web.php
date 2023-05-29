<?php
use App\Http\Controllers\Guest\PageController;
use App\Http\Controllers\Admin\ComicController;
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

Route::get('/comics', [PageController::class, 'comics'])->name('comics');
Route::resource('/admin/comics', ComicController::class);

Route::get('/characters', function () {
    return view('characters');
})->name('characters');
