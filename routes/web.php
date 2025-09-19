<?php

use App\Http\Controllers\backend\AdminAuthController;
use App\Http\Controllers\backend\InvoiceController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Route::get('/', [AdminAuthController::class, 'index']);
Route::get('/admin/logout', [AdminAuthController::class, 'logOut']);

Auth::routes();

// Dashboard
Route::get('/admin/dashboard', [InvoiceController::class, 'createDashboard']);
// Invoice Routes
Route::get('/admin/invoice', [InvoiceController::class, 'invoiceBilling']);
Route::get('/admin/create-invoice', [InvoiceController::class, 'invoiceCreate']);
Route::post('/admin/create-invoice/store', [InvoiceController::class, 'invoiceStore']);
Route::get('/admin/invoice-view/{id}', [InvoiceController::class, 'invoiceView']);
Route::get('/admin/invoice-edit/{id}', [InvoiceController::class, 'invoiceEdit']);
Route::post('/admin/invoice-update/{id}', [InvoiceController::class, 'invoiceUpdate']);
Route::get('/admin/invoice-delete/{id}', [InvoiceController::class, 'invoiceDelete']);
Route::get('/admin/invoice-print/{id}', [InvoiceController::class, 'invoicePrint']);
