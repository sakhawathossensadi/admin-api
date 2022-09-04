<?php

use Analyzen\Admin\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::group(
    [
        'middleware' => ['auth:api'],
        'prefix' => 'admin',
    ],
    static function (): void {
        Route::get('candidates', [AdminController::class, 'index'])->name('candidate.index');
    }
);
