<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PhimController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomePageController::class, 'index']);
Route::get('/chi-tiet-phim/{slug}', [HomePageController::class, 'chiTietPhim']);
Route::get('/phim/{id_phim}', [HomePageController::class, 'phim'])->name('phim');
Route::get('/trailer', [HomePageController::class, 'trailer']);
Route::get('/phim-moi', [HomePageController::class, 'phimMoi']);
Route::post('/tim-kiem', [HomePageController::class, 'actionTimKiem']);

// admin quan ly phim
Route::group(['prefix' => '/admin'], function() {
    Route::group(['prefix' => '/phim'], function() {
        Route::get('/index', [PhimController::class, 'index']);
        Route::get('/data', [PhimController::class, 'getData']);
        Route::post('/create', [PhimController::class, 'store']);
        Route::post('/update', [PhimController::class, 'update']);
        Route::post('/delete', [PhimController::class, 'destroy']);
    });
});
