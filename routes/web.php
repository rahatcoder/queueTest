<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\productsCategory;
use App\Http\Controllers\products;

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

// Product Category part Routes Starts
Route::get('dashboard/productsCategory', [productsCategory::class, 'index']);
Route::get('dashboard/productsCategory/add', [productsCategory::class, 'create']);
Route::get('dashboard/productsCategory/edit/{id}', [productsCategory::class, 'edit']);
Route::get('dashboard/productsCategory/view/{id}', [productsCategory::class, 'view']);
Route::post('dashboard/productsCategory/submit', [productsCategory::class, 'store']);
Route::post('dashboard/productsCategory/update', [productsCategory::class, 'modify']);
Route::post('dashboard/productsCategory/softdelete', [productsCategory::class, 'softdelete']);
Route::post('dashboard/productsCategory/restore', [productsCategory::class, 'restore']);
Route::post('dashboard/productsCategory/delete', [productsCategory::class, 'distroy']);
// Product Category part Routes Ends

// Product part Routes Starts
Route::get('dashboard/products', [products::class, 'index']);
Route::get('dashboard/products/add', [products::class, 'create']);
Route::get('dashboard/products/edit/{id}', [products::class, 'edit']);
Route::get('dashboard/products/view/{id}', [products::class, 'view']);
Route::post('dashboard/products/submit', [products::class, 'store']);
Route::post('dashboard/products/update', [products::class, 'update']);
Route::post('dashboard/products/softdelete', [products::class, 'softdelete']);
Route::post('dashboard/products/restore', [products::class, 'restore']);
Route::post('dashboard/products/delete', [products::class, 'distroy']);
// Product part Routes Ends

//Email routes starts
Route::post('dashboard/email'), [email::class,'email']);
//Email routes end
require __DIR__.'/auth.php';