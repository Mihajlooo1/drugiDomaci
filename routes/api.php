<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\CreditController;
use App\Http\Controllers\CreditRequestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/clients', [ClientController::class, 'index']);
Route::get('/credits', [CreditController::class, 'index']);
Route::get('/credit-requests', [CreditRequestController::class, 'index']);
Route::get('/credit-requests/{id}', [CreditRequestController::class, 'show']);

Route::middleware('auth:sanctum')->group(function () {
    Route::put('/credits/{id}', [CreditController::class, 'update']);
    Route::post('/credit-requests', [CreditRequestController::class, 'store']);
    Route::delete('/credit-requests/{id}', [CreditRequestController::class, 'destroy']);
});
