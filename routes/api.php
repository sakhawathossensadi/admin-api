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
        Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
        Route::post('candidates/{candidateId}/status', [AdminController::class, 'updateStatus'])->name('candidate.status.update');
        Route::get('candidates/{candidateId}/details', [AdminController::class, 'show'])->name('candidate.details');
    }
);
