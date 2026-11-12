
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\aboutContoller;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;

// Public Pages
Route::get('/', [PortfolioController::class, 'home'])->name('home');

Route::get('/about', [aboutContoller::class, 'index'])->name('about');

Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');

Route::get('/skills', [SkillController::class, 'index'])->name('skills');

// Guest Authentication
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'show'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

    Route::get('/login', [LoginController::class, 'show'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.store');
});

// Authenticated Users
Route::middleware('auth')->group(function () {

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/projects/create', [PortfolioController::class, 'create'])
        ->name('portfolio.create');

    Route::post('/projects', [PortfolioController::class, 'store'])
        ->name('portfolio.store');

    Route::get('/projects/{project}/edit', [PortfolioController::class, 'edit'])
        ->name('portfolio.edit');

    Route::put('/projects/{project}', [PortfolioController::class, 'update'])
        ->name('portfolio.update');

    Route::delete('/projects/{project}', [PortfolioController::class, 'destroy'])
        ->name('portfolio.destroy');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])
        ->name('profile.edit');
});
Route::put('/profile', [ProfileController::class, 'update'])
    ->name('profile.update');
