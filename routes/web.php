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
Route::get('area/{area}', [AreaController::class, 'show'])->name('area.show');
Route::put('area/{area}', [AreaController::class, 'update'])->name('area.update');
Route::get('area/{area}/edit', [AreaController::class, 'edit'])->name('area.edit');
Route::delete('area/{area}',[AreaController::class,'destroy'])->name('area.destroy');

//Computer
Route::get('computers', [ComputerController::class, 'index'])->name('computer.index');
Route::get('computer/create', [ComputerController::class, 'create'])->name('computer.create');
Route::post('computer/store', [ComputerController::class, 'store'])->name('computer.store');
Route::get('computer/{computer}', [ComputerController::class, 'show'])->name('computer.show');
Route::put('computer/{computer}', [ComputerController::class, 'update'])->name('computer.update');
Route::get('computer/{computer}/edit', [ComputerController::class, 'edit'])->name('computer.edit');
Route::delete('computer/{computer}', [ComputerController::class, 'destroy'])->name('computer.destroy');


//TrainigCenter
Route::get('training-centers', [TrainingCenterController::class, 'index'])->name('training-center.index');
Route::get('training-center/create', [TrainingCenterController::class, 'create'])->name('training-center.create');
Route::post('training-center/store', [TrainingCenterController::class, 'store'])->name('training-center.store');
Route::get('training-center/{training_center}', [TrainingCenterController::class, 'show'])->name('training-center.show');
Route::put('training-center/{training_center}', [TrainingCenterController::class, 'update'])->name('training-center.update');
Route::get('training-center/{training_center}/edit', [TrainingCenterController::class, 'edit'])->name('training-center.edit');
Route::delete('training-center/{training_center}', [TrainingCenterController::class, 'destroy'])->name('training-center.destroy');

//Apprentice
Route::get('apprentice', [ApprenticeController::class, 'index'])->name('apprentice.index');
Route::get('apprentice/create', [ApprenticeController::class, 'create'])->name('apprentice.create');
Route::post('apprentice/store', [ApprenticeController::class, 'store'])->name('apprentice.store');
Route::get('apprentice/{apprentice}', [ApprenticeController::class, 'show'])->name('apprentice.show');
Route::put('apprentice/{apprentice}', [ApprenticeController::class, 'update'])->name('apprentice.update');
Route::get('apprentice/{apprentice}/edit', [ApprenticeController::class, 'edit'])->name('apprentice.edit');
Route::delete('apprentice/{apprentice}',[ApprenticeController::class,'destroy'])->name('apprentice.destroy');

//Teacher
Route::get('teachers', [TeacherController::class, 'index'])->name('teacher.index');
Route::get('teacher/create', [TeacherController::class, 'create'])->name('teacher.create');
Route::post('teacher/store', [TeacherController::class, 'store'])->name('teacher.store');
Route::get('teacher/{teacher}', [TeacherController::class, 'show'])->name('teacher.show');
Route::put('teacher/{teacher}', [TeacherController::class, 'update'])->name('teacher.update');
Route::get('teacher/{teacher}/edit', [TeacherController::class, 'edit'])->name('teacher.edit');
Route::delete('teacher/{teacher}',[TeacherController::class,'destroy'])->name('teacher.destroy');

//Course
Route::get('courses', [CourseController::class, 'index'])->name('course.index');
Route::get('course/create', [CourseController::class, 'create'])->name('course.create');
Route::post('course/store', [CourseController::class, 'store'])->name('course.store');
Route::get('course/{course}', [CourseController::class, 'show'])->name('course.show');
Route::put('course/{course}', [CourseController::class, 'update'])->name('course.update');
Route::get('course/{course}/edit', [CourseController::class, 'edit'])->name('course.edit');
Route::delete('course/{course}',[CourseController::class,'destroy'])->name('course.destroy');