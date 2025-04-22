<?php

use App\Http\Controllers\Api\V1\WasteController;
use Illuminate\Support\Facades\Route;

Route::group([], function() {
    Route::apiResource("wastes", WasteController::class);
});
