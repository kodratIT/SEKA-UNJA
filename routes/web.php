<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\KkdController;
use App\Http\Controllers\PengajuanSertifikatController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\QrcodeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SertifikatController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('Home');

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::middleware(['auth','role:super-admin'])->name('admin.')->prefix('admin')->group(function(){
    Route::resource('/roles',RolesController::class);
    Route::post('/roles/{role}/permissions',[RolesController::class,'givePermission'])->name('roles.permissions');
    Route::delete('/roles/{role}/permissions/{permission}',[RolesController::class,'revokePermission'])->name('roles.permissions.revoke');
    Route::resource('/permissions',PermissionsController::class);
    Route::post('/permissions/{permission}/roles',[PermissionsController::class,'assignRole'])->name('permissions.roles');
    Route::delete('/permissions/{permission}/roles/{role}',[PermissionsController::class,'removeRole'])->name('permissions.roles.remove');
    Route::get('/users',[UserController::class,'index'])->name('users.index');
    Route::delete('/users/{user}',[UserController::class,'destroy'])->name('users.destroy');
    Route::get('/users/{user}',[UserController::class,'show'])->name('users.show');
    Route::post('/users/{user}/roles',[UserController::class,'assignRole'])->name('users.roles');
    Route::delete('/users/{user}/roles/{role}',[UserController::class,'removeRole'])->name('users.roles.remove');
    Route::resource('/qrcode',QrcodeController::class);
    Route::resource('/pengajuanSertifikat',PengajuanSertifikatController::class);
    Route::post('/createqr',[PresensiController::class,'createqr'])->name('create.qr');
}); 

Route::middleware('auth','role:Mahasiswa')->group(function(){
    Route::resource('/sertifikat',SertifikatController::class);
    Route::get('kkd',[KkdController::class,'index'])->name('kkd.index');
    Route::get('/presensi',[PresensiController::class,'index'])->name('presensi.index');
    Route::post('/presensi/store',[PresensiController::class,'store'])->name('presensi.store');
    Route::post('/presensi/{presensi}',[PresensiController::class,'update'])->name('presensi.update');
    Route::get('/presensi/datang',[PresensiController::class,'datang'])->name('presensi.datang');
    Route::get('/presensi/pulang',[PresensiController::class,'pulang'])->name('presensi.pulang');
    Route::post('/validasi', [PresensiController::class, 'validasi'])->name('validasi');
});

Route::get('/editprofile',[UserController::class,'editprofile'])->name('edit.profile');