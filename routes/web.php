<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;


//Index
Route::get('/', function () {
    return view('layouts.app');
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

//Apprentice
Route::get('apprentice', [ApprenticeController::class, 'index'])->name('apprentice.index');
Route::get('apprentice/create', [ApprenticeController::class, 'create'])->name('apprentice.create');
Route::post('apprentice/store', [ApprenticeController::class, 'store'])->name('apprentice.store');

//Teacher
Route::get('teachers', [TeacherController::class, 'index'])->name('teacher.index');
Route::get('teacher/create', [TeacherController::class, 'create'])->name('teacher.create');
Route::post('teacher/store', [TeacherController::class, 'store'])->name('teacher.store');

//Course
Route::get('courses', [CourseController::class, 'index'])->name('course.index');
Route::get('course/create', [CourseController::class, 'create'])->name('course.create');
Route::post('course/store', [CourseController::class, 'store'])->name('course.store');