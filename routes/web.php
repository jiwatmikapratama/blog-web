<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', function () {
    return view('index');
});

// Route::get('/admin', function () {
//     return view('admin.index');
// });

Route::prefix('/admin')->group(
    function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
        Route::get('/kategori', [KategoriController::class, 'index'])->name('admin.kategori.index');
    }
);
