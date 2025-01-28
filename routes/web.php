<?php

use App\Http\Controllers\AdminController;
use App\Http\Middleware\CheckIfAuthenticated;
use App\Http\Middleware\CheckIfAuthenticatedAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriProfesiController;
use App\Http\Controllers\LokerController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\ProfesiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\AuthController;

// ===============================================================Route Admin=====================================================================
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::post('/', [AdminController::class, 'login'])->name('admin.login');
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::middleware(CheckIfAuthenticatedAdmin::class)->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    });
});

// Route CRUD Kategori Profesi
Route::prefix('admin/kategori_profesi')->middleware(CheckIfAuthenticatedAdmin::class)->group(function () {
    Route::get('/', [KategoriProfesiController::class, 'view'])->name('kategori_profesi.view');
    Route::get('/create', [KategoriProfesiController::class, 'create'])->name('kategori_profesi.create');
    Route::post('/', [KategoriProfesiController::class, 'store'])->name('kategori_profesi.store');
    Route::get('/{kategori_profesi}', [KategoriProfesiController::class, 'show'])->name('kategori_profesi.show');
    Route::get('/edit/{kategori_profesi}', [KategoriProfesiController::class, 'edit'])->name('kategori_profesi.edit');
    Route::put('/{kategori_profesi}', [KategoriProfesiController::class, 'update'])->name('kategori_profesi.update');
    Route::delete('/{kategori_profesi}', [KategoriProfesiController::class, 'destroy'])->name('kategori_profesi.destroy');
});

// Route CRUD Loker
Route::prefix('admin/loker')->group(function () {
    Route::get('/', [LokerController::class, 'index'])->name('lokeradmin.index');
    Route::get('/create', [LokerController::class, 'create'])->name('loker.create');
    Route::post('/', [LokerController::class, 'store'])->name('loker.store');
    Route::get('/{loker}', [LokerController::class, 'show'])->name('loker.show');
    Route::get('edit/{loker}', [LokerController::class, 'edit'])->name('loker.edit');
    Route::put('/{loker}', [LokerController::class, 'update'])->name('loker.update');
    Route::delete('/{loker}', [LokerController::class, 'destroy'])->name('loker.destroy');
});

// Route CRUD Perusahaan
Route::prefix('admin/perusahaan')->group(function () {
    Route::get('/', [PerusahaanController::class, 'index'])->name('perusahaan.index');
    Route::get('/create', [PerusahaanController::class, 'create'])->name('perusahaan.create');
    Route::post('/', [PerusahaanController::class, 'store'])->name('perusahaan.store');
    // Route::get('/{perusahaan}', [PerusahaanController::class, 'show'])->name('perusahaan.show');
    Route::get('edit/{perusahaan}', [PerusahaanController::class, 'edit'])->name('perusahaan.edit');
    Route::put('/{perusahaan}', [PerusahaanController::class, 'update'])->name('perusahaan.update');
    Route::delete('/{perusahaan}', [PerusahaanController::class, 'destroy'])->name('perusahaan.destroy');
});

// Route CRUD Profesi
Route::prefix('admin/profesi')->middleware(CheckIfAuthenticatedAdmin::class)->group(function () {
    Route::get('/', [ProfesiController::class, 'view'])->name('profesi.view');
    Route::get('/create', [ProfesiController::class, 'create'])->name('profesi.create');
    Route::post('/', [ProfesiController::class, 'store'])->name('profesi.store');
    Route::get('/{profesi}', [ProfesiController::class, 'show'])->name('profesi.show');
    Route::get('/edit/{profesi}', [ProfesiController::class, 'edit'])->name('profesi.edit');
    Route::put('/{profesi}', [ProfesiController::class, 'update'])->name('profesi.update');
    Route::delete('/{profesi}', [ProfesiController::class, 'destroy'])->name('profesi.destroy');
});

// Route CRUD User (uji coba dulu)
Route::prefix('admin/user')->middleware(CheckIfAuthenticatedAdmin::class)->group(function () {
    Route::get('/', [UserController::class, 'view'])->name('user.view');
    Route::post('/', [UserController::class, 'store'])->name('user.store');
    Route::get('/{user}', [UserController::class, 'show'])->name('user.show');
    Route::put('/{user}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/{user}', [UserController::class, 'destroy'])->name('user.destroy');
});

// ===============================================================Route User=====================================================================
Route::prefix('signup')->group(function () {
    Route::get('/', [SignUpController::class, 'index'])->name('signup.index');
    Route::post('/', [SignUpController::class, 'store'])->name('signup.store');
});

Route::prefix('login')->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login.index');
    Route::post('/', [LoginController::class, 'authenticate'])->name('login.authenticate');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// // Route Profile User
Route::prefix('profileuser')->middleware(CheckIfAuthenticated::class)->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    Route::post('/', [UserController::class, 'store'])->name('user.store');
    Route::get('/edit/{user}', [UserController::class, 'detail'])->name('user.detail');
    Route::put('/edit/{user}', [UserController::class, 'edit'])->name('user.edit');
    // Route::delete('/{user}', [UserController::class, 'destroy'])->name('user.destroy');
});

// Route Home
Route::prefix('')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/about', [HomeController::class, 'about'])->name('home.about');
    Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
    Route::get('/loker', [HomeController::class, 'loker'])->name('loker.index');
});

// Detail loker
Route::prefix('loker')->middleware(CheckIfAuthenticated::class)->group(function () {
    Route::get( '/{id}', [HomeController::class, 'lokerDetail'])->name('loker.detail');
});

Route::prefix('profesi')->group(function () {
    Route::get('/{kategori}', [ProfesiController::class, 'index'])->name('profesi.index');
    Route::get('/detail/{id}', [ProfesiController::class, 'detail'])->name('profesi.detail');
});

Route::prefix('kategori')->group(function () {
    Route::get('/', [KategoriProfesiController::class, 'index'])->name('kategori.index');
});


