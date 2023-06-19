<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdvController;

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

Route::get('/adv', [AdvController::class, 'index']);

Route::post('/adv', [AdvController::class, 'search']);

Route::post('/adv/{price_from}-{price_to}', [AdvController::class, 'search']);
