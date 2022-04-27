<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\nhapLoaiController;
use App\Http\Controllers\hangHoaController;
use App\Http\Controllers\khachhangController;
use App\Http\Controllers\TrangChuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\danhMucController;
use App\Http\Controllers\productController;
use App\Http\Controllers\lienheController;

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
    return redirect('/home');
});
Route::get('/lien-he', function () {
    return view('client/lienhe');
});
Route::get('/gioi-thieu', function () {
    return view('client/gioithieu');
});
Route::get('/homeAdmin', function () {
    return view('admin/pages/admin');
});

Route::get('/home', [TrangChuController::class, 'listhanghoa']);
Route::get('/', [HomeController::class, 'index']);

Auth::routes();



Route::get('/admin', function () {
    return view('admin/pages/admin');
})->middleware('checkadmin::class');

//hàng hóa
Route::group(["before" => "hanghoa"], function () {

    Route::get('/hang-hoa', [hangHoaController::class, 'DataHangHoa'])->middleware('checkadmin::class');

    Route::post('/nhap-hang-hoa', [hangHoaController::class, 'NhapHang'])->middleware('checkadmin::class');

    Route::post('/xoa-hang-hoa', [hangHoaController::class, 'DeleteHangHoa'])->middleware('checkadmin::class');

    Route::get('/cap-nhat-hang-hoa/{mahh}', [hangHoaController::class, 'EditHanghoa'])->middleware('checkadmin::class');

    Route::post('/cap-nhat-hang-hoa/{mahh}', [hangHoaController::class, 'CapNhatHangHoa'])->middleware('checkadmin::class');
});
//loai hang
Route::group(["before" => "loaihang"], function () {

    Route::get('/loai-hang', [nhapLoaiController::class, 'DataLoaiHang'])->middleware('checkadmin::class');

    Route::post('/nhap-loai-hang', [nhapLoaiController::class, 'NhapLoai'])->middleware('checkadmin::class');

    Route::post('/xoa-loai-hang', [nhapLoaiController::class, 'DeleteLoai'])->middleware('checkadmin::class');

    Route::get('/cap-nhat-loai-hang/{id}', [nhapLoaiController::class, 'edit'])->middleware('checkadmin::class');

    Route::post('/cap-nhat-loai-hang/{id}', [nhapLoaiController::class, 'CapNhatLoai'])->middleware('checkadmin::class');
});
//danh mục
Route::group(["before" => "danhmuc"], function () {

    Route::get('/danh-muc', [danhMucController::class, 'DataDanhMuc'])->middleware('checkadmin::class');

    Route::post('/nhap-danh-muc-hang', [danhMucController::class, 'NhapDanhMuc'])->middleware('checkadmin::class');

    Route::post('/xoa-danh-muc', [danhMucController::class, 'XoaDanhMuc'])->middleware('checkadmin::class');

    Route::get('/cap-nhat-danh-muc-hang/{id}', [danhMucController::class, 'SuaDanhMuc'])->middleware('checkadmin::class');

    Route::post('/cap-nhat-danh-muc-hang/{id}', [danhMucController::class, 'CapNhatDanhMuc'])->middleware('checkadmin::class');
});
//quản lý khách hàng
Route::get('/khach-hang', [khachhangController::class, 'listkhachhang'])->middleware('checkadmin::class');;
Route::post('/xoa-khach-hang', [khachhangController::class, 'xoakhachhang'])->middleware('checkadmin::class');;
//sản phẩm 
Route::get('/san-pham', function () {
    return view('client/product');
});
Route::get('/all-san-pham', [productController::class, 'Allsanpham']); 

Route::get('/ca-phe-truyen-thong', [productController::class, 'Allcaphetruyenthong']);
Route::get('/the-coffee-house-b2', [productController::class, 'thecoffeehouseb2']);
Route::get('/k6-pha-phin', [productController::class, 'k6phaphin']);
Route::get('/m5-pha-phin', [productController::class, 'm5phaphien']);

Route::get('/ca-phe-tuoi', [productController::class, 'Allcaphetuoi']);
Route::get('/m1-pha-phin', [productController::class, 'm1phaphin']);
Route::get('/m6-pha-may', [productController::class, 'm6phamay']);



//chi tiết sản phẩm
Route::get('chi_tiet_san_pham/{mahh}', [productController::class, 'getchitiet']);
Route::get('search', [productController::class, 'getSearch']);
//cart
Route::get('cart', [productController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{mahh}', [productController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [productController::class, 'update'])->name('update.cart');
Route::post('remove-from-cart', [productController::class, 'remove'])->name('remove.from.cart');
Route::get('thanh-toan/{total}', [productController::class, 'thanhtoan']);
