<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItemRequestController;


Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/items', [ItemController::class, 'index']);
Route::get('/items/{id}', [ItemController::class, 'show']);

Route::post('/items', [ItemController::class, 'store']);
Route::put('/items/{id}', [ItemController::class, 'update']);
Route::delete('/items/{id}', [ItemController::class, 'destroy']);

Route::get('/my-requests', [ItemRequestController::class, 'index']);
Route::post('/requests', [ItemRequestController::class, 'store']);
Route::delete('/my-requests/{id}', [ItemRequestController::class, 'destroy']);

    // owner actions
Route::put('/requests/{id}/approve', [ItemRequestController::class, 'approve']);
Route::put('/requests/{id}/reject', [ItemRequestController::class, 'reject']);