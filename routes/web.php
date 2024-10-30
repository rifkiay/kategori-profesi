<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriProfesiController;
use App\Http\Controllers\LokerController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\ProfesiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

// ===============================================================Route Admin=====================================================================
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    // Route::post('/', [KategoriProfesiController::class, 'store'])->name('admin.store'); 
    // Route::get('/{admin}', [KategoriProfesiController::class, 'show'])->name('admin.show');
    // Route::put('/{admin}', [KategoriProfesiController::class, 'update'])->name('admin.update'); 
    // Route::delete('/{admin}', [KategoriProfesiController::class, 'destroy'])->name('admin.destroy'); 
});

// Route CRUD Kategori Profesi
Route::prefix('admin/kategori_profesi')->group(function () {
    Route::get('/', [KategoriProfesiController::class, 'view'])->name('kategori_profesi.view');
    Route::post('/', [KategoriProfesiController::class, 'store'])->name('kategori_profesi.store');
    Route::get('/{kategori_profesi}', [KategoriProfesiController::class, 'show'])->name('kategori_profesi.show');
    Route::put('/{kategori_profesi}', [KategoriProfesiController::class, 'update'])->name('kategori_profesi.update');
    Route::delete('/{kategori_profesi}', [KategoriProfesiController::class, 'destroy'])->name('kategori_profesi.destroy');
});

// Route CRUD Loker
Route::prefix('admin/loker')->group(function () {
    Route::get('/', [LokerController::class, 'index'])->name('loker.index');
    Route::post('/', [LokerController::class, 'store'])->name('loker.store');
    Route::get('/{loker}', [LokerController::class, 'show'])->name('loker.show');
    Route::put('/{loker}', [LokerController::class, 'update'])->name('loker.update');
    Route::delete('/{loker}', [LokerController::class, 'destroy'])->name('loker.destroy');
});

// Route CRUD Perusahaan
Route::prefix('admin/perusahaan')->group(function () {
    Route::get('/', [PerusahaanController::class, 'index'])->name('perusahaan.index');
    Route::post('/', [PerusahaanController::class, 'store'])->name('perusahaan.store');
    Route::get('/{perusahaan}', [PerusahaanController::class, 'show'])->name('perusahaan.show');
    Route::put('/{perusahaan}', [PerusahaanController::class, 'update'])->name('perusahaan.update');
    Route::delete('/{perusahaan}', [PerusahaanController::class, 'destroy'])->name('perusahaan.destroy');
});

// Route CRUD Profesi
Route::prefix('admin/profesi')->group(function () {
    Route::get('/', [ProfesiController::class, 'view'])->name('profesi.view');
    Route::post('/', [ProfesiController::class, 'store'])->name('profesi.store');
    Route::get('/{profesi}', [ProfesiController::class, 'show'])->name('profesi.show');
    Route::put('/{profesi}', [ProfesiController::class, 'update'])->name('profesi.update');
    Route::delete('/{profesi}', [ProfesiController::class, 'destroy'])->name('profesi.destroy');
});

// Route CRUD Profesi
Route::prefix('admin/profesi')->group(function () {
    Route::get('/', [ProfesiController::class, 'view'])->name('profesi.view');
    Route::post('/', [ProfesiController::class, 'store'])->name('profesi.store');
    Route::get('/{profesi}', [ProfesiController::class, 'show'])->name('profesi.show');
    Route::put('/{profesi}', [ProfesiController::class, 'update'])->name('profesi.update');
    Route::delete('/{profesi}', [ProfesiController::class, 'destroy'])->name('profesi.destroy');
});

// Route CRUD User (uji coba dulu)
Route::prefix('admin/user')->group(function () {
    Route::get('/', [UserController::class, 'view'])->name('user.view');
    Route::post('/', [UserController::class, 'store'])->name('user.store');
    Route::get('/{user}', [UserController::class, 'show'])->name('user.show');
    Route::put('/{user}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/{user}', [UserController::class, 'destroy'])->name('user.destroy');
});

// ===============================================================Route User=====================================================================
// Route::get('/', function () {
//     return view('welcome');
// });

// // Route Profile User
// Route::prefix('profileuser')->group(function () {
//     Route::get('/', [UserController::class, 'index'])->name('user.index');
//     Route::post('/', [UserController::class, 'store'])->name('user.store');
//     Route::get('/{user}', [UserController::class, 'show'])->name('user.show');
//     Route::put('/{user}', [UserController::class, 'update'])->name('user.update');
//     Route::delete('/{user}', [UserController::class, 'destroy'])->name('user.destroy');
// });

// // Route Home
// Route::prefix('')->group(function () {
//     Route::get('/', [HomeController::class, 'index'])->name('home.index');
// });

// // Route Detail Profesi
// Route::prefix('')->group(function () {
//     Route::get('/{id}', [ProfesiController::class, 'index'])->name('profesi.index');
//     Route::get('/{detail}/{id}', [ProfesiController::class, 'detail'])->name('detailprofesi.detail');
// });

// // Route Loker
// Route::prefix('')->group(function () {
//     Route::get('/', [LokerController::class, 'index'])->name('loker.index');
// });

// ===============================================================Route Admin Dari Frontend=====================================================================

Route::get('/dashboard', function () {
    return view('Admin.Dashboard');
});
Route::get('/profile', function () {
    return view('Admin.profile');
});
Route::get('/user', function () {
    return view('User.showUser');
});

Route::prefix('Perusahaan')->group(function () {
    Route::get('/show', function () {
        return view('Perusahaan.showPerusahaan');
    });
    Route::get('/create', function () {
        return view('Perusahaan.createPerusahaan');
    });
    Route::get('/update', function () {
        return view('Perusahaan.updatePerusahaan');
    });
});

Route::prefix('profesi')->group(function () {
    Route::get('/show', function () {
        return view('Profesi.showProfesi');
    });
    Route::get('/create', function () {
        return view('Profesi.createProfesi');
    });
    Route::get('/update', function () {
        return view('Profesi.updateProfesi');
    });
});

Route::prefix('loker')->group(function () {
    Route::get('/show', function () {
        return view('Loker.showLoker');
    });
    Route::get('/create', function () {
        return view('Loker.createLoker');
    });
    Route::get('/update', function () {
        return view('Loker.updateLoker');
    });
});

// ===============================================================Route User Dari Frontend=====================================================================

Route::get('/', function () {
    return view('Pages.home');
})->name('home');

Route::get('/kategori/{namaKategori}', function ($namaKategori) {
    return view('pages.detail-profesi', ['kategori' => $namaKategori]);
});

Route::get('/dashboard', function () {
    return view('Admin.Dashboard');
})->name('Dashboard');

Route::get('/detail-profesi', function () {
    return view('Pages.kategori-profesi');
})->name('kategori-profesi');

Route::get('/login', function () {
    return view('Auth.Login');
})->name('login');

