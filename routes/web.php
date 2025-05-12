<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TrainingCenterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Area
Route::get('areas', [AreaController::class, 'index'])->name('area.index');
Route::get('area/create', [AreaController::class, 'create'])->name('area.create');
Route::post('area/store', [AreaController::class, 'store'])->name('area.store');

//Computer
Route::get('computers', [ComputerController::class, 'index'])->name('computer.index');
Route::get('computer/create', [ComputerController::class, 'create'])->name('computer.create');
Route::post('computer/store', [ComputerController::class, 'store'])->name('computer.store');

//TrainigCenter
Route::get('training-centers', [TrainingCenterController::class, 'index'])->name('training-center.index');
Route::get('training-center/create', [TrainingCenterController::class, 'create'])->name('training-center.create');
Route::post('training-center/store', [TrainingCenterController::class, 'store'])->name('training-center.store');