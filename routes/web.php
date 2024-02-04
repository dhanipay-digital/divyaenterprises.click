<?php

use App\Http\Controllers\Front\FetchController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\RechargeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::prefix('/')->group(function () {
    Route::get('', [HomeController::class, 'index']);
    Route::get('contact', [HomeController::class, 'contact']);
    Route::get('privacy-policy', [HomeController::class, 'policy']);
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        // Route::get('/', [HomeController::class,'index']);
        Route::prefix('recharge')->group(function () {
            Route::get('/{category}', [RechargeController::class, 'recharge']);
            Route::post('/{category}', [RechargeController::class, 'recharge_submit']);
        });

        Route::prefix('fetch')->group(function () {
            Route::get('/plan/{category}', [FetchController::class, 'fetch_plans']);
            Route::get('/operator/{category}', [FetchController::class, 'fetch_operator']);
        });
    });
});
Route::get('/dashboard', function () {
    // return view('dashboard');
    return redirect('dashboard/recharge/mobile');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
