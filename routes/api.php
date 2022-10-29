<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\AdminController;
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

//Public Routes
Route::post('/register/store', [AuthController::class, 'register']);
Route::post('/login/store', [AuthController::class, 'login']);


//Protected Routes
Route::group(['middleware'=>['auth:sanctum']], function() {
    Route::get('admin', [AdminController::class, 'index'])->name('index'); 
    Route::post('admin', [AdminController::class, 'store'])->name('store');
    Route::get('admin/{id}', [AdminController::class, 'show'])->name('show');
    Route::put('admin/{id}', [AdminController::class, 'update'])->name('update');
    Route::delete('admin/{id}', [AdminController::class, 'destroy'])->name('destroy');
    Route::post('import', [AdminController::class, 'importExcel'])->name('importExcel');
    Route::get('export', [AdminController::class, 'exportExcel'])->name('exportExcel');
    Route::post('email', [AdminController::class, 'email'])->name('email');
    Route::delete('logout', [AuthController::class, 'logout'])->name('logout');
}); 