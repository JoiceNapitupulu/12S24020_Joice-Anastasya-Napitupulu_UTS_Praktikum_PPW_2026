<?php

use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\LoanController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => redirect()->route('equipments.index'));
Route::resource('equipement', EquipmentController::class);

Route::get('/equipments', [EquipmentController::class, 'index'])->name('equipment.index');
Route::get('/equipments/create', [EquipmentController::class, 'create'])->name('equipment.create');
Route::post('/equipments', [EquipmentController::class, 'store'])->name('equipment.store');
Route::get('/equipments/{id}', [EquipmentController::class, 'show'])->name('equipment.show');
Route::get('/loans/create', [LoanController::class, 'create'])->name('loan.create');
Route::post('/equipments', [LoanController::class, 'store'])->name('loan.store');
