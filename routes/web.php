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
Route::prefix('admin/loker')->middleware(CheckIfAuthenticatedAdmin::class)->group(function () {
    Route::get('/', [LokerController::class, 'index'])->name('loker.index');
    Route::post('/', [LokerController::class, 'store'])->name('loker.store');
    Route::get('/{loker}', [LokerController::class, 'show'])->name('loker.show');
    Route::put('/{loker}', [LokerController::class, 'update'])->name('loker.update');
    Route::delete('/{loker}', [LokerController::class, 'destroy'])->name('loker.destroy');
});

// Route CRUD Perusahaan
Route::prefix('admin/perusahaan')->middleware(CheckIfAuthenticatedAdmin::class)->group(function () {
    Route::get('/', [PerusahaanController::class, 'index'])->name('perusahaan.index');
    Route::post('/', [PerusahaanController::class, 'store'])->name('perusahaan.store');
    Route::get('/{perusahaan}', [PerusahaanController::class, 'show'])->name('perusahaan.show');
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
    Route::get('/edit/{user}', [UserController::class, 'show'])->name('user.show');
    Route::put('/edit/{user}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/{user}', [UserController::class, 'destroy'])->name('user.destroy');
});

// Route Home
Route::prefix('')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [HomeController::class, 'about'])->name('home.about');
    Route::get('/profesi', [HomeController::class, 'profesi'])->name('home.profesi');
    Route::get('/profesi/detail/{id}', [HomeController::class, 'profesidetail'])->name('home.profesidetail');
    Route::get('/profesi/{kategori}', [HomeController::class, 'index'])->name('profesi.index');
    Route::get('/profesi/kategori/{kategori}', [HomeController::class, 'kategori'])->name('home.kategori');
    Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
    Route::get('/loker', [HomeController::class, 'loker'])->name('loker');
    Route::get('/loker/{id}', [HomeController::class, 'lokerDetail'])->name('loker.detail');
});

// Route Detail Profesi
// // Route Detail Profesi
// Route::prefix('')->group(function () {
//     Route::get('/{id}', [ProfesiController::class, 'index'])->name('profesi.index');
//     Route::get('/{detail}/{id}', [ProfesiController::class, 'detail'])->name('detailprofesi.detail');
// });

// Route Loker
// // Route Loker
// Route::prefix('')->group(function () {
//     Route::get('/', [LokerController::class, 'index'])->name('loker.index');
// });

// ===============================================================Route Admin Dari Frontend=====================================================================

// Route::get('/dashboard', function () {
//     return view('Admin.Dashboard');
// });
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

// Route::get('/login', function () {
//     return view('Auth.login');
// });

Route::get('/sign-up', function () {
    return view('Auth.sign-up');
});

    // Route::post('/login-submit', function () {
    //     session(['is_logged_in' => true]);
    //     return redirect('/');
    // });

    // Route::get('/logout', function () {
    //     session()->forget('is_logged_in');
    //     return redirect('/');
    // });

// Route::get('/about', function () {
//     return view('Pages.about');
// })->name('about');

// Route::get('/contact', function () {
//     return view('Pages.contact');
// })->name('contact');

// Route::get('/', function () {
//     return view('Pages.home');
// })->name('home');

// Route::get('/profile-user', function () {
//     return view('Pages.profile-user'); 
// })->name('profile-user');

// Route::get('/loker', function () {
//     return view('Pages.loker');
// })->name('loker');

// Route::get('/profesi', function () {
//     return view('Pages.profesi'); 
// })->name('profesi');

Route::get('/profesi/kategori/{kategori}', function ($kategori) {
    return view('Pages.kategori-profesi', ['kategori' => $kategori]);
})->name('kategori-profesi');

// Route::get('/profesi/detail/{id}', function ($id) {
//     return view('Pages.detail-profesi', ['id' => $id]);
// })->name('profesi.detail');