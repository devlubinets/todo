<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;
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

#Начальный экран
Route::get('/', [WelcomeController::class,'showPublicItems'])->name('welcome');

Route::get('/delete-task/{id}',[DashboardController::class,'deleleTask'])->name('delete-task');
Route::get('/edit-task/{id}/edite',[DashboardController::class,'editTask'])->name('edit-task');
Route::post('/edit-task/{id}/edite',[DashboardController::class,'updateTask'])->name('update-task');
Route::post('/add-task', [DashboardController::class,'addTask'])->name('add-task');


#Аутентификация
Route::get('/dashboard', [DashboardController::class,'showPrivateItems'])
    ->middleware(['auth'])
    ->name('dashboard');

require __DIR__.'/auth.php';
