<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendedoresController;

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

//Route::prefix('v1')->group(static function(){
 Route::group(['middleware' => 'auth.jwt', 'prefix' => 'v1'], function(){
    Route::get('/vendedores' , [App\Http\Controllers\VendedoresController::class, 'index']);
    Route::post('/vendedores', [VendedoresController::class, 'store']);
    Route::delete('/vendedores/{id}', [VendedoresController::class, 'destroy']);
    Route::get('/vendedores/{id}', [VendedoresController::class, 'show']);
    Route::put('/vendedores/{id}', [VendedoresController::class, 'update']);
});

Route::post('login', [App\Http\Controllers\APIController::class, 'login']);
