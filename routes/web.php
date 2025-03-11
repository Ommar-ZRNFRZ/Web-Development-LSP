<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AssesorController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\SkemaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PermitRequestController;
use App\Http\Controllers\PermitCheckController;
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

//Route::get('/', function () {
//    return redirect('login');
//});
Route::get('/', [LandingPageController::class, 'index'])->name('index');
Route::get('/login', [LoginController::class, 'index'])->name('login');
route::post('/login', [LoginController::class, 'login'])->name('auth.login');
route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::get('/assesor', [AssesorController::class, 'index'])->name('assesor.index');
Route::get('/assesor/{id}/edit', [AssesorController::class, 'edit'])->name('assesor.edit');
Route::delete('/assesor/{id}', [AssesorController::class, 'destroy'])->name('assesor.destroy');
Route::get('/assesor/create', [AssesorController::class, 'create'])->name('assesor.create');
Route::post('/assesor/store', [AssesorController::class, 'store'])->name('assesor.store');
Route::put('/assesor/{id}', [AssesorController::class, 'update'])->name('assesor.update');


Route::get('/skema', [SkemaController::class, 'index'])->name('skema.index');
Route::get('/skema/{id}/edit', [SkemaController::class, 'edit'])->name('skema.edit');
Route::delete('/skema/{id}', [SkemaController::class, 'destroy'])->name('skema.destroy');
Route::get('/skema/create', [SkemaController::class, 'create'])->name('skema.create');
Route::post('/skema/store', [SkemaController::class, 'store'])->name('skema.store');
Route::put('/skema/{id}', [SkemaController::class, 'update'])->name('skema.update');


Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa/store', [SiswaController::class, 'store'])->name('siswa.store');
Route::put('/siswa/{id}', [SiswaController::class, 'update'])->name('siswa.update');


Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal.index');
Route::get('/jadwal/{id}/edit', [JadwalController::class, 'edit'])->name('jadwal.edit');
Route::delete('/jadwal/{id}', [JadwalController::class, 'destroy'])->name('jadwal.destroy');
Route::get('/jadwal/create', [JadwalController::class, 'create'])->name('jadwal.create');
Route::post('/jadwal/store', [JadwalController::class, 'store'])->name('jadwal.store');
Route::put('/jadwal/{id}', [JadwalController::class, 'update'])->name('jadwal.update');

//Route::get('/permit-requests/form', [PermitRequestController::class, 'index'])->name('permit-requests.index');
//Route::post('/permit-requests/form', [PermitRequestController::class, 'store'])->name('permit-requests.store');
// Route::get('/permit-requests/form/{identity_number}', [PermitRequestController::class, 'showPermitForm'])->name('permit-requests.form');
// Route::post('/permit-requests/store', [PermitRequestController::class, 'storePermitRequest'])->name('permit-requests.storePermit');

 Route::get('/permit-requests/check', [PermitCheckController::class, 'index'])->name('permit-requests.index');
 Route::post('/permit-requests/check', [PermitCheckController::class, 'store'])->name('permit-requests.check-store');
 Route::get('/permit-requests/check/{nis}', [PermitCheckController::class, 'checkPermitRequest'])->name('permit-requests.check');