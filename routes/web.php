<?php

use App\Http\Controllers\admin\DanhmucController;
use App\Http\Controllers\admin\QLNhanVienController;
use App\Http\Controllers\admin\QLTaiKhoanController;
use App\Http\Controllers\admin\roleController;
use App\Http\Controllers\admin\socketController;
use App\Http\Controllers\admin\TaiKhoanController;
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

Route::group(['namespace' => 'admin', 'prefix' => 'admin', 'name' => 'AdminRocker'], function () {

  Route::get('/dang-nhap', [TaiKhoanController::class, 'DangNhap']);
  Route::post('/kich-hoat-dang-nhap', [TaiKhoanController::class, 'KichHoatDangNhap']);
  Route::get('/dang-xuat', [TaiKhoanController::class, 'DangXuat']);
  // QUÊN MẠT KHẨU
  Route::get('/ho-so/quen-mat-khau', [TaiKhoanController::class, 'QuenMatKhau']);
  Route::post('/ho-so/quen-mat-khau', [TaiKhoanController::class, 'QuenMatKhauHoSo']);
  Route::get('/ho-so/kich-hoat-mail-doi-mat-khau/{ma_bam_quen_mat_khau}', [TaiKhoanController::class, 'KichHoatMailDoiMatKhau']);
  Route::post('/ho-so/doi-mat-khau', [TaiKhoanController::class, 'KichHoatDoiMatKhau']);

  Route::middleware(['CheckAdminAccess'])->group(function () {


    Route::get('/ho-so', [TaiKhoanController::class, 'HoSo']);
    Route::get('/ho-so/du-lieu', [TaiKhoanController::class, 'DuLieuHoSo']);
    Route::post('/ho-so/cap-nhat', [TaiKhoanController::class, 'CapNhatHoSo']);
    Route::get('/ho-so/cap-nhat-mat-khau', [TaiKhoanController::class, 'DoiMatKhau']);
    Route::post('/ho-so/cap-nhat-mat-khau', [TaiKhoanController::class, 'DoiMatKhauHoSo']);

    Route::group(['prefix' => '/socket'], function () {
      Route::get('/', [socketController::class, 'index']);
      Route::post('/check', [socketController::class, 'server']);
    });

    // quan ly nhan vien
    Route::middleware(['QuanLyMiddleware'])->group(function () {
      // Quan Ly Nhân viên --------------
      Route::group(['prefix' => '/quan-ly-nhan-vien'], function () {
        Route::get('/', [QLNhanVienController::class, 'QuanLyNhanVien']);
        Route::post('/du-lieu', [QLNhanVienController::class, 'DuLieuNhanVien']);
        Route::post('/them-nhan-vien', [QLNhanVienController::class, 'ThemNhanVien']);
        Route::post('/xoa-nhan-vien', [QLNhanVienController::class, 'XoaNhanVien']);
        Route::post('/cap-nhat-nhan-vien', [QLNhanVienController::class, 'CapNhatNhanVien']);
      });

      // role 
      Route::group(['prefix' => '/role'], function () {
        Route::get('/', [roleController::class, 'index']);
        Route::get('/du-lieu', [roleController::class, 'HienThiRole']);
        Route::post('/them', [roleController::class, 'ThemRole']);
        Route::post('/xoa', [roleController::class, 'XoaRole']);
        Route::post('/cap-nhat', [roleController::class, 'CapNhatRole']);
      });
    });


    // nhan vien ban hang  -qlsp-lh-kh-dh
    Route::middleware(['NhanVienMiddleware'])->group(function () {

    });

    // nhan vien dang bai (sale) - qlsp-lh-kh-bv
    Route::middleware(['NhanVienDangBaiMiddleware'])->group(function () {

    });

  });
});