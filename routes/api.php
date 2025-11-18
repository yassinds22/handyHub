<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProvinceController;
use App\Http\Controllers\Api\AuthController;

use App\Http\Controllers\Api\ServiceRequestController;
use App\Http\Controllers\Api\ServiceTypeController;
use App\Http\Controllers\Api\WorkerController;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;





// ---------------- Authentication ----------------

// Normal registration (email + password)
//
Route::post('/register', [AuthController::class, 'register']);
// تسجيل مستخدم عبر Google
Route::post('register/google', [AuthController::class, 'registerWithGoogle'])->name('api.register.google');

// تسجيل دخول (Email/Password أو Google ID)
Route::post('login', [AuthController::class, 'login'])->name('api.login');

// ---------------- Provinces Management ----------------
Route::apiResource('provinces', ProvinceController::class);




// 
    Route::apiResource('worker', WorkerController::class)->only(['index', 'show']);
   Route::apiResource('serviceRequest', ServiceRequestController::class)->only(['index', 'show']);
   Route::apiResource('serviceType', ServiceTypeController::class);

Route::middleware('auth:sanctum')->group(function () {

     Route::resource('worker', WorkerController::class)
        ->only(['store','destroy']);

    Route::resource('serviceRequest', ServiceRequestController::class)
        ->only(['store', 'destroy']);
});