<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\Produk;
use App\Models\PemesananDetail;
use Illuminate\Support\Facades\DB;
class DaftarpemesananController extends Controller
{
    public function index(){
        $pemesanan = Pemesanan::all();
       
        $joinpemesanan = DB::table('pemesanan')
        ->join('pemesanan_detail', 'pemesanan.id_pemesanan','=','pemesanan_detail.id_pemesanan')
        ->join('customer', 'customer.id_customer','=','pemesanan.id_customer')
        ->get();
        return view('layout.karyawan.daftarpemesanan',compact('pemesanan','joinpemesanan'));
    }

    public function detail($id_pemesanan){
        $pemesanandetail = PemesananDetail::find($id_pemesanan);
        $produk = Produk::all();
        $daftarjoin = DB::table('pemesanan_detail')
                    ->join('pemesanan', 'pemesanan_detail.id_pemesanan','=','pemesanan.id_pemesanan')
                    ->join('produk','pemesanan_detail.id_produk','=','produk.id_produk')
                    ->select('pemesanan_detail.*','produk.*')
                    ->where('pemesanan_detail.id_pemesanan','=',$id_pemesanan)
                    ->get();
        return view('layout.karyawan.detailpemesanan',compact('pemesanandetail','produk','daftarjoin'));
    }

    public function update(Request $request, $id_pemesanan){
        $update = Pemesanan::find($id_pemesanan);
        $update->keterangan = $request->keterangan;
        $update -> save();
        return redirect('daftarpemesanan');         

    }
    
}
