<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReaderController;
use App\Http\Controllers\RobotsController;

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

Route::post('/comic', [ComicController::class, 'scrappComicData']);
Route::get('/image', [ComicController::class, 'crawlImageChapter']);
Route::get('/comic/process', [ComicController::class, 'comicProcess']);
Route::get('/comic/chapter/process', [ComicController::class, 'comicChapterProcess']);
Route::post('/login/process', [AuthController::class, 'loginProcess'])->name('login.process');
Route::get('/', [ReaderController::class, 'index'])->name('reader');
Route::get('/cari', [ReaderController::class, 'searchComic'])->name('reader.search');
Route::get('/manhwa/{slug}', [ReaderController::class, 'manhwaDetail'])->name('reader.manhwa.detail');
Route::get('/manhua/{slug}', [ReaderController::class, 'mahuaDetail'])->name('reader.manhua.detail');
Route::get('/manga/{slug}', [ReaderController::class, 'mangaDetail'])->name('reader.manga.detail');
Route::get('/manga', [ReaderController::class, 'pageManga'])->name('reader.page.manga');
Route::get('/manga/{page}', [ReaderController::class, 'pageMangaPagination'])->name('reader.page.manga.pagination');
Route::get('/manhwa', [ReaderController::class, 'pageManhwa'])->name('reader.page.manhwa');
Route::get('/manhwa/{page}', [ReaderController::class, 'pageManhwaPagination'])->name('reader.page.manhwa.pagination');
Route::get('/chapter/{slug}', [ReaderController::class, 'readChapter'])->name('reader.chapter');
Route::get('/komik/{page}', [ReaderController::class, 'pageComic'])->name('reader.comic.page');
Route::get('/genre/{slug}/{page}', [ReaderController::class, 'pageGenre'])->name('reader.genre.page');

Route::get('/robots.txt', [RobotsController::class, 'generate']);

Auth::routes();

Route::group(['prefix' => 'sea'], function($router) {
    $router->get('/dashboard', [DashboardController::class, 'index'])->name('sea.dashboard');
});
