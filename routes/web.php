<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\KioskControler;
use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
//use App\Http\Controllers\






//return QrCode::size(200)->generate('Hello, Laravel QR Code!');


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', MainController::class)->name('main');
    Route::resource('/product', ProductController::class);
    Route::resource('/production', ProductionController::class);
    Route::resource('/user', UserController::class);
});

Route::get('/', [KioskControler::class, 'index'])->name('kiosk.index');
Route::get('/{id}', [KioskControler::class, 'show'])->name('kiosk.show');

Route::get('/{id}/production', [KioskControler::class, 'production'])->name('kiosk.production');
