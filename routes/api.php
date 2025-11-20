<?php

use App\Http\Controllers\Admin\ProvinceController as AdminProvinceController;

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProviceController;
use App\Http\Controllers\Api\SearchController;
use App\Http\Controllers\Api\ServiceRequestController;
use App\Http\Controllers\Api\ServiceTypeController;
use App\Http\Controllers\Api\WorkerController;

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
Route::apiResource('provinces', ProviceController::class);
// Route::get('/provinces/main', [ProviceController::class, 'main']);
Route::get('/provinces/{provinceId}/districts', [ProviceController::class, 'districts']);



////////////-earch-///////////
Route::get('/workers/search', [SearchController::class, 'search']);





// 
    Route::apiResource('worker', WorkerController::class)->only(['index', 'show']);
   Route::apiResource('serviceRequest', ServiceRequestController::class)->only(['index', 'show']);
   Route::apiResource('serviceType', ServiceTypeController::class);

Route::middleware('auth:sanctum')->group(function () {

     Route::resource('worker', WorkerController::class)
        ->only(['store','update','destroy']);

    Route::resource('serviceRequest', ServiceRequestController::class)
        ->only(['store','update', 'destroy']);
});