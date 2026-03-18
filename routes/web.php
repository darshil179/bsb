<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

Route::get('/',           [PageController::class, 'home'])->name('home');
Route::get('/about',      [PageController::class, 'about'])->name('about');
Route::get('/products',   [PageController::class, 'products'])->name('products');
Route::get('/services',   [PageController::class, 'services'])->name('services');
Route::get('/process',    [PageController::class, 'process'])->name('process');
Route::get('/compliance', [PageController::class, 'compliance'])->name('compliance');
Route::get('/sectors',    [PageController::class, 'sectors'])->name('sectors');
Route::get('/faq',        [PageController::class, 'faq'])->name('faq');
Route::get('/contact',    [PageController::class, 'contact'])->name('contact');
Route::post('/contact',   [ContactController::class, 'submit'])->name('contact.submit');