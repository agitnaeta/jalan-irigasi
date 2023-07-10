<?php

use App\Http\Controllers\ExcelController;
use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.
use App\Http\Controllers\DashboardPageController;

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('irigasi', 'IrigasiCrudController');
    Route::crud('jalan', 'JalanCrudController');
    Route::crud('user', 'UserCrudController');
    Route::get('dashboard/index',[DashboardPageController::class,'index'])->name('dashboard.index');
    Route::get('export/irigasi',[ExcelController::class,'exportIrigasi'])->name('export.irigasi');
    Route::get('export/jalan',[ExcelController::class,'exportJalan'])->name('export.jalan');

    Route::get('print/irigasi',[\App\Http\Controllers\PdfController::class,'printIrigasi'])->name('print.irigasi');
    Route::get('print/jalan',[\App\Http\Controllers\PdfController::class,'printJalan'])->name('print.jalan');
}); // this should be the absolute last line of this file
