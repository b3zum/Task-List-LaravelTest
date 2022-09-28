<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use App\Http\Controllers\MailController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('tasks', [TaskController::class, 'index'])->name('tasks');
Route::post('task', [TaskController::class, 'store'])->name('post.task');
Route::delete('task/{task}', [TaskController::class, 'destroy'])->name('task.destroy');


Route::get('profile/edit', [ProfileController::class, 'getEdit'])->middleware(['auth'])->name('profile.edit');
Route::post('profile/edit', [ProfileController::class, 'postEdit'])->middleware(['auth'])->name('profile.edit');

require __DIR__ . '/auth.php';






