<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporanKeuangan;
use App\Models\Pemesanan;
use Illuminate\Support\Facades\DB;


use Illuminate\Database\Eloquent\Model;
class LaporankeuanganController extends Controller
{
    //
    public function index()
    {
        $laporan = DB::table('pemesanan')
                 ->groupBy('pemesanan.tanggal_pemesanan') 
                 ->select(DB::raw('sum(total_harga) as hargatotal'),'pemesanan.*') 
                ->get();
        $totaljoin = DB::table('pemesanan')
                ->join('laporan_keuangan', 'pemesanan.tanggal_pemesanan','=','laporan_keuangan.tanggal_laporan')
                ->select(DB::raw('sum(pemesanan.total_harga) as hargatotal'),'laporan_keuangan.*')   
                ->groupBy('pemesanan.tanggal_pemesanan') 
                ->where('pemesanan.keterangan','=','Selesai')            
                ->get();
       
        return view('layout.admin.laporankeuangan.laporankeuangan',compact('laporan','totaljoin'));
    }

    public function update(Request $request, $id_laporan){
        $update = LaporanKeuangan::find($id_laporan);
        $update->pengeluaran = $request->pengeluaran;
        $update->keuntungan = $request->keuntungan;
        $update->pemasukan = $request->pemasukan;
        $update->id_karyawan = auth()->id();
        $update -> save();
        return redirect('laporankeuangan');         

    }
}
