<?php

use Illuminate\Support\Facades\Route;
use Analyzen\Auth\Http\Controllers\UserController;

Route::group(
    [
        'middleware' => 'api',
        'prefix' => 'admin',
    ],
    function () {
        Route::group(['middleware' => 'auth:api'], function () {
            Route::get('candidates', [UserController::class, 'index'])->name('candidates');
        });
    }
);

Route::get('he', function () {
    return "heloo";
});
