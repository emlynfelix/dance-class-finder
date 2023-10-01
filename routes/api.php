<?php

use App\Http\Controllers\DanceClassesController;
use App\Http\Controllers\LocationsController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\StylesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('dance_classes', [DanceClassesController::class, 'index'])->name('dance_classes.index');
Route::get('dance_classes/{dance_class}', [DanceClassesController::class, 'show'])->name('dance_classes.show');
Route::post('dance_classes', [DanceClassesController::class, 'store'])->name('dance_classes.store');
Route::put('dance_classes/{dance_class}', [DanceClassesController::class, 'update'])->name('dance_classes.update');
Route::delete('dance_classes/{dance_class}', [DanceClassesController::class, 'destroy'])->name('dance_classes.destroy');

Route::get('locations', [LocationsController::class, 'index'])->name('locations.index');
Route::get('locations/{location}', [LocationsController::class, 'show'])->name('locations.show');
Route::post('locations', [LocationsController::class, 'store'])->name('locations.store');
Route::put('locations/{location}', [LocationsController::class, 'update'])->name('locations.update');
Route::delete('locations/{location}', [LocationsController::class, 'destroy'])->name('locations.destroy');

Route::get('teachers', [TeachersController::class, 'index'])->name('teachers.index');
Route::get('teachers/{teacher}', [TeachersController::class, 'show'])->name('teachers.show');
Route::post('teachers', [TeachersController::class, 'store'])->name('teachers.store');
Route::put('teachers/{teacher}', [TeachersController::class, 'update'])->name('teachers.update');
Route::delete('teachers/{teacher}', [TeachersController::class, 'destroy'])->name('teachers.destroy');

Route::get('styles', [StylesController::class, 'index'])->name('styles.index');
Route::get('styles/{style}', [StylesController::class, 'show'])->name('styles.show');
Route::post('styles', [StylesController::class, 'store'])->name('styles.store');
Route::put('styles/{style}', [StylesController::class, 'update'])->name('styles.update');
Route::delete('styles/{style}', [StylesController::class, 'destroy'])->name('styles.destroy');
