<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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
    return view('welcome');
});

Route::controller(TaskController::class)->middleware(['auth'])->name('tasks.')->prefix('tasks')->group(function () {
    Route::get('', 'index')->name('index');
    Route::post('', 'store')->name('store');
    Route::delete('/{task}', 'destroy')->name('destroy');
});

Route::controller(ProfileController::class)->middleware(['auth'])->name('profile.')->prefix('profile/edit')->group(function () {
    Route::get('', 'getEdit')->name('edit');
    Route::post('', 'postEdit')->name('edit');
});

require __DIR__ . '/auth.php';
