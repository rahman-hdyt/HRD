<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Master\DimensiController;
use App\Http\Controllers\Master\JabatanController;


Route::get('/', [DashboardController::class, 'viewDashboard'])->name('dashboard');

Route::prefix('master/')->group(function () {
    //Jabatan
    Route::get('jabatan', [JabatanController::class, 'index'])->name('master.jabatan');
    Route::post('jabatan/{id?}', [JabatanController::class, 'store'])->name('master.jabatan.store');
    Route::delete('jabatan/{id}', [JabatanController::class, 'destroy'])->name('master.jabatan.destroy');

    //Dimensi
    Route::get('dimensi', [DimensiController::class, 'index'])->name('master.dimensi');
});
