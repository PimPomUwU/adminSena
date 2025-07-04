<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Area
Route::get('areas', [AreaController::class, 'index'])->name('api.v1.area.index');
Route::get('area/create', [AreaController::class, 'create'])->name('api.v1.area.create');
Route::post('area/store', [AreaController::class, 'store'])->name('api.v1.area.store');
Route::get('area/{area}', [AreaController::class, 'show'])->name('api.v1.area.show');
Route::put('area/{area}', [AreaController::class, 'update'])->name('api.v1.area.update');
Route::get('area/{area}/edit', [AreaController::class, 'edit'])->name('api.v1.area.edit');
Route::delete('area/{area}',[AreaController::class,'destroy'])->name('api.v1.area.destroy');

//Computer
Route::get('computers', [ComputerController::class, 'index'])->name('api.v1.computer.index');
Route::get('computer/create', [ComputerController::class, 'create'])->name('api.v1.computer.create');
Route::post('computer/store', [ComputerController::class, 'store'])->name('api.v1.computer.store');
Route::get('computer/{computer}', [ComputerController::class, 'show'])->name('api.v1.computer.show');
Route::put('computer/{computer}', [ComputerController::class, 'update'])->name('api.v1.computer.update');
Route::get('computer/{computer}/edit', [ComputerController::class, 'edit'])->name('api.v1.computer.edit');
Route::delete('computer/{computer}', [ComputerController::class, 'destroy'])->name('api.v1.computer.destroy');


//TrainigCenter
Route::get('training-centers', [TrainingCenterController::class, 'index'])->name('api.v1.training-center.index');
Route::get('training-center/create', [TrainingCenterController::class, 'create'])->name('api.v1.training-center.create');
Route::post('training-center/store', [TrainingCenterController::class, 'store'])->name('api.v1.training-center.store');
Route::get('training-center/{training_center}', [TrainingCenterController::class, 'show'])->name('api.v1.training-center.show');
Route::put('training-center/{training_center}', [TrainingCenterController::class, 'update'])->name('api.v1.training-center.update');
Route::get('training-center/{training_center}/edit', [TrainingCenterController::class, 'edit'])->name('api.v1.training-center.edit');
Route::delete('training-center/{training_center}', [TrainingCenterController::class, 'destroy'])->name('api.v1.training-center.destroy');

//Apprentice
Route::get('apprentice', [ApprenticeController::class, 'index'])->name('api.v1.apprentice.index');
Route::get('apprentice/create', [ApprenticeController::class, 'create'])->name('api.v1.apprentice.create');
Route::post('apprentice/store', [ApprenticeController::class, 'store'])->name('api.v1.apprentice.store');
Route::get('apprentice/{apprentice}', [ApprenticeController::class, 'show'])->name('api.v1.apprentice.show');
Route::put('apprentice/{apprentice}', [ApprenticeController::class, 'update'])->name('api.v1.apprentice.update');
Route::get('apprentice/{apprentice}/edit', [ApprenticeController::class, 'edit'])->name('api.v1.apprentice.edit');
Route::delete('apprentice/{apprentice}',[ApprenticeController::class,'destroy'])->name('api.v1.apprentice.destroy');

//Teacher
Route::get('teachers', [TeacherController::class, 'index'])->name('api.v1.teacher.index');
Route::get('teacher/create', [TeacherController::class, 'create'])->name('api.v1.teacher.create');
Route::post('teacher/store', [TeacherController::class, 'store'])->name('api.v1.teacher.store');
Route::get('teacher/{teacher}', [TeacherController::class, 'show'])->name('api.v1.teacher.show');
Route::put('teacher/{teacher}', [TeacherController::class, 'update'])->name('api.v1.teacher.update');
Route::get('teacher/{teacher}/edit', [TeacherController::class, 'edit'])->name('api.v1.teacher.edit');
Route::delete('teacher/{teacher}',[TeacherController::class,'destroy'])->name('api.v1.teacher.destroy');

//Course
Route::get('courses', [CourseController::class, 'index'])->name('api.v1.course.index');
Route::get('course/create', [CourseController::class, 'create'])->name('api.v1.course.create');
Route::post('course/store', [CourseController::class, 'store'])->name('api.v1.course.store');
Route::get('course/{course}', [CourseController::class, 'show'])->name('api.v1.course.show');
Route::put('course/{course}', [CourseController::class, 'update'])->name('api.v1.course.update');
Route::get('course/{course}/edit', [CourseController::class, 'edit'])->name('api.v1.course.edit');
Route::delete('course/{course}',[CourseController::class,'destroy'])->name('api.v1.course.destroy');