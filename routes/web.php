<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\HabitController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\SettingsController;

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

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/calendar/{type?}/{year?}/{month?}/{day?}',  [CalendarController::class, 'index'])
    ->where('year','[0-9]{4}')
    ->where('month','[0-9]{2}')
    ->where('day','[0-9]{2}')
    ->middleware(['auth'])
    ->name('dashboard.calendar');

Route::get('/dashboard/tasks', [TaskController::class, 'index'])
    ->middleware(['auth'])->name('dashboard.tasks');

Route::get('/dashboard/habits', [HabitController::class, 'index'])
    ->middleware(['auth'])->name('dashboard.habits');

Route::get('/dashboard/notes', [NoteController::class, 'index'])
    ->middleware(['auth'])->name('dashboard.notes');

Route::get('/setting', [SettingsController::class, 'index'])
    ->middleware(['auth'])->name('settings');

require __DIR__.'/auth.php';
