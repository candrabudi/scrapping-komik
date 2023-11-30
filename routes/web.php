<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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

Route::get('/comic', [ComicController::class, 'scrappComicData']);
Route::get('/image', [ComicController::class, 'crawlImageChapter']);
Route::get('/comic/process', [ComicController::class, 'comicProcess']);
Route::get('/comic/chapter/process', [ComicController::class, 'comicChapterProcess']);
Route::post('/login/process', [AuthController::class, 'loginProcess'])->name('login.process');
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => 'sea'], function($router) {
    $router->get('/dashboard', [DashboardController::class, 'index'])->name('sea.dashboard');
});
