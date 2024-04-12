<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkriningController;
use App\Http\Controllers\FormskriningController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\TtdController;


Route::get('/', function () {
    return view('beranda');
});

Route::get('/skrining', [SkriningController::class, 'index'])->name('skrining.index');

Route::get('/formskrining', [FormskriningController::class, 'index'])->name('formskrining.index');

Route::get('/mitra', [MitraController::class, 'index'])->name('mitra.index');

Route::get('/ttd', [TtdController::class, 'index'])->name('ttd.index');
