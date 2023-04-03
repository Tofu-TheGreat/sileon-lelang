<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LelangController;
use Illuminate\Support\Facades\Route;
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
    return view('Admin.pages-profile');
});

Auth::routes();

Route::get('registerpage_admin', [AdminController::class, 'regis'])->name('regis');
Route::post('register_admin', [AdminController::class, 'regisaction'])->name('regis.action');

// 
Route::get('loginpage_admin', [AdminController::class, 'login'])->name('login');
Route::post('login_admin', [AdminController::class, 'loginaction'])->name('login.action');

Route::get('loginpage_petugas', [AdminController::class, 'login_petugas'])->name('login.petugas');

Route::get('data_petugas', [HomeController::class, 'data_petugastable'])->name('table.datapetugas');
Route::get('data_level', [HomeController::class, 'data_leveltable'])->name('table.datalevel');
Route::get('tambah_petugas', [HomeController::class, 'tambah'])->name('tambah.petugas');
Route::get('profile', [HomeController::class, 'profile'])->name('profile');
// 

Route::get('data_barang', [BarangController::class, 'tableBarang'])->name('table.databarang');
Route::get('data_barang_petugas', [BarangController::class, 'tableBarang_petugas'])->name('table.databarang.petugas');
Route::get('barang', [BarangController::class, 'barang'])->name('tambah.barang');
Route::post('barang_action', [BarangController::class, 'barang_action'])->name('action.barang');

Route::get('tambah_lelang_page', [LelangController::class, 'addlelang'])->name('add.lelang');
Route::get('data_lelang', [HomeController::class, 'lelang'])->name('table.lelang');
Route::get('data_lelang_petugas', [HomeController::class, 'lelang_petugas'])->name('table.lelang.petugas');
Route::get('/ubah_lelang_page/{id_lelang}', [LelangController::class, 'ubah_lelang'])->name('ubah.lelang');
Route::get('/ubah_barang_page/{id_barang}', [BarangController::class, 'ubah_barang'])->name('ubah.barang');
Route::post('tambah_lelang', [LelangController::class, 'buka_lelang'])->name('action.lelang');
Route::post('update_lelang', [LelangController::class, 'update_lelang'])->name('update.lelang');
Route::post('update_barang', [BarangController::class, 'update_barang'])->name('update.barang');
Route::get('/delete_lelang/{id_lelang}', [LelangController::class, 'delete_lelang'])->name('delete.lelang');
Route::get('/delete_barang/{id_barang}', [BarangController::class, 'delete_barang'])->name('delete.barang');
Route::get('/delete_petugas/{id_petugas}', [AdminController::class, 'delete_petugas'])->name('delete.petugas');


// Route::get('admin_home', [HomeController::class, 'admin_home'])->middleware('cekAksesLogin:1')->name('Admin.index');


Route::get('petugas_home', [HomeController::class, 'petugas_home'])->name('Petugas.index');


Route::get('admin_home', [HomeController::class, 'admin_home'])->name('Admin.index')->middleware('admin');

Route::group(['middleware' => ['auth', 'cekAkses:admin']], function () {
});
