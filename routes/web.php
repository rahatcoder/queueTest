<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\productsCategoryController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\SummaryController;

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
Route::get('dashboard/productsCategory', [ProductsCategoryController::class, 'index']);
Route::get('dashboard/productsCategory/add', [ProductsCategoryController::class, 'create']);
Route::get('dashboard/productsCategory/edit/{id}', [ProductsCategoryController::class, 'edit']);
Route::get('dashboard/productsCategory/view/{id}', [ProductsCategoryController::class, 'view']);
Route::post('dashboard/productsCategory/submit', [ProductsCategoryController::class, 'store']);
Route::post('dashboard/productsCategory/update', [ProductsCategoryController::class, 'modify']);
Route::post('dashboard/productsCategory/softdelete', [ProductsCategoryController::class, 'softdelete']);
Route::post('dashboard/productsCategory/restore', [ProductsCategoryController::class, 'restore']);
Route::post('dashboard/productsCategory/delete', [ProductsCategoryController::class, 'distroy']);
// Product Category part Routes Ends

// Product part Routes Starts
Route::get('dashboard/products', [ProductsController::class, 'index']);
Route::get('dashboard/products/add', [ProductsController::class, 'create']);
Route::get('dashboard/products/edit/{id}', [ProductsController::class, 'edit']);
Route::get('dashboard/products/view/{id}', [ProductsController::class, 'view']);
Route::post('dashboard/products/submit', [ProductsController::class, 'store']);
Route::post('dashboard/products/update', [ProductsController::class, 'update']);
Route::post('dashboard/products/softdelete', [ProductsController::class, 'softdelete']);
Route::post('dashboard/products/restore', [ProductsController::class, 'restore']);
Route::post('dashboard/products/delete', [ProductsController::class, 'distroy']);
// Product part Routes Ends

//Summary part route start
// Route::get('dashboard/summary', [SummaryController::class, 'index']);
Route::resource('summary', SummaryController::class);
//Summary part route end
//Email routes starts
// Route::post('dashboard/email', [email::class,'email']);
//Email routes end
require __DIR__.'/auth.php';