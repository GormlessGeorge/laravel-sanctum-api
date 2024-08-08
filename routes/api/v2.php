<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v2\TaskController;
use App\Http\Controllers\Api\v2\CompleteTaskController;

Route::prefix('v2')->middleware('auth:sanctum')->group(function() {
    Route::apiResource('/tasks', TaskController::class);
    Route::patch('/tasks/{task}/complete', CompleteTaskController::class);
});