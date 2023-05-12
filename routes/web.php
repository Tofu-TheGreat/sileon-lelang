<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LelangController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



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






Route::get('/penawaran/{id_lelang}', [Controller::class, 'penawaran_page'])->name('penawaran');

Route::get('/penawaran', function () {
    return view('Users.penawaran',);
});
Route::get('/lupa_password', function () {
    return view('Users.lupa_password',);
});
Route::get('/verifikasi', function () {
    return view('Users.verifikasi',);
});

Route::get('/login', function () {
    return view('Users.login',);
});
Route::get('/register', function () {
    return view('Users.register',);
});
Route::get('/about', function () {
    return view('Users.about',);
});

Route::get('/contact', function () {
    return view('Users.contact',);
});
Route::get('/ketentuan', function () {
    return view('Users.ketentuan',);
});


Route::get('/forgot-password', function () {
    return view('res_pas_1');
})->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
})->name('password.email');

Route::get('/reset-password/{token}', function (string $token) {
    return view('auth.passwords.reset', ['token' => $token]);
})->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('login')->with('status', __($status))
        : back()->withErrors(['email' => [__($status)]]);
})->name('password.update');

Auth::routes();
Route::get('/', [Controller::class, 'lelang_page'])->name('banner');
Route::get('registerpage_admin', [AdminController::class, 'regis'])->name('regis');
Route::post('register_admin', [AdminController::class, 'regisaction'])->name('regis.action');

//
Route::get('/login_user', [AdminController::class, 'login'])->name('login');
Route::post('login_admin', [AdminController::class, 'loginaction'])->name('login.action');
Route::get('logout_admin', [AdminController::class, 'logout'])->name('logout.admin');



Route::get('profile', [HomeController::class, 'profile'])->name('profile');
//


Route::get('search', [HomeController::class, 'search'])->name('search.action');





Route::get('register_user', [UserController::class, 'register_user'])->name('register.user');
Route::get('login', [UserController::class, 'login'])->name('login.user');
Route::post('register', [UserController::class, 'action_register'])->name('register.action');
Route::post('login', [UserController::class, 'action_login'])->name('loginuser.action');

// Route::get('admin_home', [HomeController::class, 'admin_home'])->middleware('cekAksesLogin:1')->name('Admin.index');



// ...daftar route yang ingin Anda jaga dengan middleware guest di sini
Route::middleware(['auth', 'petugas:Admin,Petugas'])->group(function () {


    Route::get('admin_home', [HomeController::class, 'admin_home'])->name('Admin.index');



    //User dan Petugas
    Route::get('data_petugas', [HomeController::class, 'data_petugastable'])->name('table.datapetugas');
    Route::get('data_user', [HomeController::class, 'data_usertable'])->name('table.datauser');
    Route::get('tambah_petugas', [HomeController::class, 'tambah'])->name('tambah.petugas');
    Route::get('/ubah_user_page/{id_user}', [HomeController::class, 'ubah_user'])->name('ubah.user');
    Route::post('update_user', [HomeController::class, 'update_user'])->name('update.user');
    Route::get('/delete_user/{id_user}', [HomeController::class, 'delete_user'])->name('delete.user');
    //Barang dan Lelang
    Route::get('data_history', [HomeController::class, 'data_historytable'])->name('table.datahistory');
    Route::get('data_barang', [BarangController::class, 'tableBarang'])->name('table.databarang');
    Route::get('barang', [BarangController::class, 'barang'])->name('tambah.barang');
    Route::post('barang_action', [BarangController::class, 'barang_action'])->name('action.barang');
    Route::post('tambah_lelang', [LelangController::class, 'buka_lelang'])->name('action.lelang');
    Route::get('data_lelang', [HomeController::class, 'lelang'])->name('table.lelang');
    Route::get('tambah_lelang_page', [LelangController::class, 'addlelang'])->name('add.lelang');
    Route::get('/ubah_lelang_page/{id_lelang}', [LelangController::class, 'ubah_lelang'])->name('ubah.lelang');
    Route::get('/ubah_barang_page/{id_barang}', [BarangController::class, 'ubah_barang'])->name('ubah.barang');
    Route::post('update_lelang', [LelangController::class, 'update_lelang'])->name('update.lelang');
    Route::post('update_barang', [BarangController::class, 'update_barang'])->name('update.barang');
    Route::get('/delete_lelang/{id_lelang}', [LelangController::class, 'delete_lelang'])->name('delete.lelang');
    Route::get('/delete_barang/{id_barang}', [BarangController::class, 'delete_barang'])->name('delete.barang');
    Route::get('/delete_history/{id_history}', [HomeController::class, 'delete_history'])->name('delete.history');
    Route::get('/cetak_pdf_barang', [LelangController::class, 'cetakpdf_barang'])->name('pdf.barang');
    Route::get('/cetak_pdf_pemenang/{id_history}', [LelangController::class, 'cetakpdf_pemenang'])->name('pdf.pemenang');
});


Route::middleware(['auth', 'user'])->group(function () {

    Route::get('/detail/{id_lelang}', [LelangController::class, 'detail'])->name('detail');
    Route::post('bid', [LelangController::class, 'bid'])->name('action.bid');
    Route::get('/histori/{id_user}', [HomeController::class, 'data_historyuser'])->name('histori.user');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
