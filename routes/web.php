<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkilController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\SosmedController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\LanguagesController;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'header']);
Route::get('/resume', [PortfolioController::class, 'resume']);
Route::get('/project', [PortfolioController::class, 'projects']);
Route::get('/contact', [PortfolioController::class, 'contact']);
Route::post('/contact', [PortfolioController::class, 'contactFunc'])->name('contact');
Route::prefix('admin')->group(function () {
    Route::resource('profile', ProfileController::class);
    Route::resource('skils', SkilController::class);
    Route::resource('resume', ResumeController::class);
    Route::resource('about', AboutController::class);
    Route::resource('languages', LanguagesController::class);
    Route::resource('projects', ProjectsController::class);
    Route::resource('sosmed', SosmedController::class);

    Route::get('message/{id}', [AdminController::class, 'inbox'])->name('admin.inbox');
    Route::get('/count-notify', [AdminController::class, 'count'])->name('message.count');
});
