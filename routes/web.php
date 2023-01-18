<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Master\JabatanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [DashboardController::class, 'viewDashboard'])->name('dashboard');

Route::prefix('master/')->group(function () {
    //Jabatan
    Route::get('jabatan', [JabatanController::class, 'index'])->name('master.jabatan');
    Route::post('jabatan/{id?}', [JabatanController::class, 'store'])->name('master.jabatan.store');
    Route::delete('jabatan/{id}', [JabatanController::class, 'destroy'])->name('master.jabatan.destroy');
});
