<?php
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\aboutContoller;

Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/skills', [SkillController::class, 'index'])->name('skills');
Route::get('/about', [aboutContoller::class, 'index'])->name('about');
Route::get('/projects/create', [PortfolioController::class, 'create'])->name('portfolio.create');
Route::post('/projects', [PortfolioController::class, 'store'])->name('portfolio.store');
Route::get('/projects/{project}/edit', [PortfolioController::class, 'edit'])->name('portfolio.edit');
Route::put('/projects/{project}', [PortfolioController::class, 'update'])->name('portfolio.update');
Route::delete('/projects/{project}', [PortfolioController::class, 'destroy'])->name('portfolio.destroy');
