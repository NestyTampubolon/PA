<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\DaftarmenuController;
use App\Http\Controllers\DaftarpemesananController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LaporankeuanganController;
use App\Http\Controllers\VerifikasiakunController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LaporankeuangandetailController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('about', [AboutController::class, 'index']);

// Menu
Route::get('menu',[ProdukController::class,'index']);

Route::get('gallery', [GalleryController::class, 'index']);

Route::get('contact', function () {
    return view('layout.contact');
});


Route::group(['middleware' => ['auth','role']], function () {
    Route::get('daftarpemesanan', [DaftarpemesananController::class, 'index']);
    Route::post('daftarpemesanan/{id_pemesanan}', [DaftarpemesananController::class, 'update'])->name('daftarpemesanan.update');
    Route::get('pemesanandetail/{id_pemesanan}', [DaftarpemesananController::class, 'detail']);

});

Route::group(['middleware' => ['auth', 'admin']], function () {       
        Route::get('laporankeuangan', [LaporankeuanganController::class,'index']);
        Route::post('laporankeuangan/store', [LaporankeuanganController::class, 'store'])->name('laporankeuangan.store');
        Route::post('laporankeuangan/{id_laporan}', [LaporankeuanganController::class, 'update'])->name('laporankeuangan.update');
        Route::get('laporankeuangandetail/{id_laporan}', [LaporankeuangandetailController::class, 'index']);
        Route::post('laporankeuangandetail/store', [LaporankeuangandetailController::class, 'store'])->name('laporankeuangandetail.store');;
        Route::post('laporankeuangandetail/update/{id_laporandetail}', [LaporankeuangandetailController::class, 'update'])->name('laporankeuangandetail.update');
        Route::post('laporankeuangandetail/updatetotal/{id_laporandetail}', [LaporankeuangandetailController::class, 'updatetotal'])->name('laporankeuangandetail.updatetotal');
        Route::get('laporankeuangandetail/delete/{id_laporandetail}', [LaporankeuangandetailController::class, 'delete'])->name('laporankeuangandetail.delete');

        Route::get('daftarmenu', [DaftarmenuController::class, 'index']);
        Route::get('tambahmenu', [DaftarmenuController::class, 'tambah']);
        Route::get('edit/{id_produk}', [DaftarmenuController::class, 'edit']);
        Route::post('daftarmenu/store', [DaftarmenuController::class, 'store']);
        Route::post('daftarmenu/update/{id_produk}', [DaftarmenuController::class, 'update'])->name('daftarmenu.update');
        Route::get('daftarmenu/delete/{id_produk}', [DaftarmenuController::class, 'delete'])->name('daftarmenu.delete');

        Route::get('verifikasiakun', [VerifikasiakunController::class, 'index']);
        Route::post('verifikasiakun/{id_customer}', [VerifikasiakunController::class, 'update'])->name('verifikasiakun.update');
        Route::get('verifikasiakun/delete/{id_customer}', [VerifikasiakunController::class, 'delete'])->name('verifikasiakun.delete');

        Route::get('informasi', [InformasiController::class, 'index']);
        Route::post('informasi/update/{id_informasi}', [InformasiController::class, 'update'])->name('informasi.update');
        Route::get('informasi/{id_informasi}', [InformasiController::class, 'edit']);
        Route::get('tambahinformasi', [InformasiController::class, 'tambah']);
        Route::post('tambahinformasi/store', [InformasiController::class, 'store'])->name('informasi.store');
        Route::get('informasi/delete/{id_informasi}', [InformasiController::class, 'delete'])->name('informasi.delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth','Verifikasi']], function () {
    Route::post('notifikasi/{id_customer}', [HomeController::class, 'notifikasi']);
    Route::get('menu/pesan/{id_produk}',[PesanController::class,'index'])->name('menu.pesan');
    Route::post('pesan/pesanan', [PesanController::class, 'simpanpesanan'])->name('pesan.pesanan');
    Route::post('checkout/storepemesanan', [CheckoutController::class, 'storepemesanan'])->name('checkout.storepemesanan');
    Route::get('checkout/{id_customer}',[CheckoutController::class,'index']);
    Route::get('checkout/delete/{id_kuantitas}', [CheckoutController::class, 'delete'])->name('checkout.delete');
});

?>
