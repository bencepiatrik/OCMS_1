<?php

use Illuminate\Support\Facades\Route;
use AppLogger\Logger\Controllers\Logs;

Route::controller(Log::class)->group(function () {
    Route::post('create-log', 'createLog');
    Route::get('logs', 'getAllLogs');
    Route::get('logs/{username}', 'getLogsByUser');
});

