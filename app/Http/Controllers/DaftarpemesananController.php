<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\Produk;
use App\Models\PemesananDetail;
use Illuminate\Support\Facades\DB;
use App\Models\LaporanKeuangan;
class DaftarpemesananController extends Controller
{
    public function index(){
        $pemesanan = Pemesanan::all();
        $joinpemesanan = DB::table('pemesanan')
        ->join('users', 'users.user_id','=','pemesanan.id_customer')
        ->select('users.name','pemesanan.*')
        ->orderBy('created_at', 'desc')
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
        $update-> save();

        $cek = LaporanKeuangan::whereRaw('tanggal_laporan',now())->first();
            if(empty($cek)){
                $laporan = new LaporanKeuangan();
                $laporan->tanggal_laporan = now();
                $laporan->save();       
            }else{
               return redeirect()->back();
            }
        
        return redirect('daftarpemesanan');  

    }
    
}
