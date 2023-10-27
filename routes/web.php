<?php

use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Back\DepartementController;
use App\Http\Controllers\Back\EmployeeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('back.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// dashboard
Route::get('/dashboard2', [DashboardController::class, 'index'])->name('index_dashboard');



// Employees
Route::get('/employees', [EmployeeController::class, 'index'])->name('index_employees');



// Departements 
Route::get('/departemens', [DepartementController::class, 'index'])->name('index_departements');
Route::post('/departements', [DepartementController::class, 'store'])->name('store_departements');
require __DIR__.'/auth.php';
