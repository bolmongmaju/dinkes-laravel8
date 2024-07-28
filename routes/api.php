<?php

use App\Http\Controllers\Api\BeritaController;
use App\Http\Controllers\Api\LayananController;
use App\Http\Controllers\Api\PhotoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/layanan', LayananController::class);
Route::apiResource('/berita', BeritaController::class);
Route::apiResource('/kegiatan', PhotoController::class);
