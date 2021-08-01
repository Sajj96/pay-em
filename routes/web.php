<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();
Route::get('/', function () {
    return redirect('login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::prefix('/attendances')->group(function() {
        Route::get('/', [\App\Http\Controllers\AttendanceController::class, 'index'])->name('attendances');
    });

    Route::prefix('/departments')->group(function() {
        Route::get('/', [\App\Http\Controllers\DepartmentController::class, 'index'])->name('departments');
        Route::post('/add', [\App\Http\Controllers\DepartmentController::class, 'save'])->name('department.add');
        Route::match(['get','post'],'/{id?}', [\App\Http\Controllers\DepartmentController::class, 'edit'])->name('department.edit');
        Route::post('/delete/{id}', [\App\Http\Controllers\DepartmentController::class, 'delete'])->name('department.delete');
    });

    Route::prefix('/employees')->group(function() {
        Route::get('/', [\App\Http\Controllers\EmployeeController::class, 'index'])->name('employees');
        Route::get('/add', [\App\Http\Controllers\EmployeeController::class, 'add'])->name('employee.add');
    });

    Route::prefix('/positions')->group(function() {
        Route::get('/', [\App\Http\Controllers\PositionController::class, 'index'])->name('positions');
        Route::post('/add', [\App\Http\Controllers\PositionController::class, 'save'])->name('position.add');
        Route::match(['get','post'],'/{id?}', [\App\Http\Controllers\PositionController::class, 'edit'])->name('position.edit');
        Route::post('/delete/{id}', [\App\Http\Controllers\PositionController::class, 'delete'])->name('position.delete');
    });
});
