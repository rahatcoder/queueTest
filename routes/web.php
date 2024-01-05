<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Panel routes Starts
Route::get('dashboard', [AdminController::class, 'index']);
// Admin Panel routes Ends

// User part Routes Starts
Route::get('dashboard/allUsers', [UserController::class, 'index']);
Route::get('dashboard/user/addUsers', [UserController::class, 'create']);
Route::get('dashboard/user/editUsers/{id}', [UserController::class, 'edit']);
Route::get('dashboard/user/viewUsers/{id}', [UserController::class, 'view']);
Route::post('dashboard/user/submit', [UserController::class, 'store']);
Route::post('dashboard/user/update', [UserController::class, 'modify']);
Route::post('dashboard/user/softdelete', [UserController::class, 'softdelete']);
Route::post('dashboard/user/restore', [UserController::class, 'restore']);
Route::post('dashboard/user/delete', [UserController::class, 'destroy']);
// User part Routes Ends

// Admission part Routes Starts
Route::get('dashboard/products', [AdmissionController::class, 'index']);
Route::get('dashboard/productsCatagory/procate', [AdmissionController::class, 'create']);
Route::get('dashboard/productsCatagory/editprocate/{slug}', [AdmissionController::class, 'edit']);
Route::get('dashboard/productsCatagory/viewprocate/{slug}', [AdmissionController::class, 'view']);
Route::post('dashboard/productsCatagory/submit', [AdmissionController::class, 'store']);
Route::post('dashboard/productsCatagory/update', [AdmissionController::class, 'update']);
Route::post('dashboard/productsCatagory/softdelete', [AdmissionController::class, 'softdelete']);
Route::post('dashboard/productsCatagory/restore', [AdmissionController::class, 'restore']);
Route::post('dashboard/productsCatagory/delete', [AdmissionController::class, 'distroy']);
// Admission part Routes Ends
require __DIR__.'/auth.php';
