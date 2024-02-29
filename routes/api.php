<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


route::group(['prefix' => 'projects'], function () {
    Route::get('/', [ProjectController::class, 'index']);
    Route::post('/', [ProjectController::class, 'store']);
    Route::get('/{project}', [ProjectController::class, 'show']);
    Route::put('/{project}', [ProjectController::class, 'update']);
    Route::delete('/{project}', [ProjectController::class, 'destroy']);
});
