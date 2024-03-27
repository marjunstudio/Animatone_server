<?php

use App\Http\Controllers\API\MusicController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\SearchController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/music-lists', [SearchController::class, 'getMusics']);
Route::get('/composers', [SearchController::class, 'getComposers']);
Route::get('/categories', [SearchController::class, 'getCategories']);
Route::post('/fetch-videos', [SearchController::class, 'fetchVideos']);

Route::post('/search', [MusicController::class, 'search']);
