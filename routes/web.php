<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkilController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\SosmedController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\LanguagesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'header']);
Route::get('/resume', [PortfolioController::class, 'resume']);
Route::get('/project', [PortfolioController::class, 'projects']);
Route::get('/contact', [PortfolioController::class, 'contact']);
Route::post('/contact', [PortfolioController::class, 'contactFunc'])->name('contact');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::get('logout', [LoginController::class, 'logout']);
Route::post('login', [LoginController::class, 'action'])->name('login.action');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [ProfileController::class, 'dashboard'])->name('dashboard');
    Route::resource('profile', ProfileController::class);
    Route::resource('skils', SkilController::class);
    Route::resource('resume', ResumeController::class);
    Route::resource('about', AboutController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('languages', LanguagesController::class);
    Route::resource('projects', ProjectsController::class);
    Route::resource('sosmed', SosmedController::class);
    Route::get('create/resume', [ResumeController::class, 'Createresume'])->name('create.resume');
    Route::post('create/resume', [ResumeController::class, 'Storeresume'])->name('store.resume');
    Route::get('edit/resume/{id}', [ResumeController::class, 'Editresume'])->name('edit.resume');
    Route::put('edit/resume/{id}', [ResumeController::class, 'updateResume'])->name('update.resume');
    Route::delete('edit/resume/{id}', [ResumeController::class, 'deleteResume'])->name('delete.resume');

    Route::get('message/{id}', [AdminController::class, 'inbox'])->name('admin.inbox');
    Route::get('/count-notify', [AdminController::class, 'count'])->name('message.count');
});
