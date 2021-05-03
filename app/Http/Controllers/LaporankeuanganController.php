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
        $laporan = DB::table('laporan_keuangan')
                ->get();
        $totaljoin = DB::table('pemesanan')
                ->join('laporan_keuangan', 'pemesanan.tanggal_pemesanan','=','laporan_keuangan.tanggal_laporan')
                ->select(DB::raw('sum(pemesanan.total_harga) as harga'),'laporan_keuangan.*') 
                ->groupBy('pemesanan.tanggal_pemesanan')
                ->get();
            
        return view('layout.admin.laporankeuangan',compact('laporan','totaljoin'));
    }

    public function update(Request $request, $id_laporan){
        $update = LaporanKeuangan::find($id_laporan);
        $update->pengeluaran = $request->pengeluaran;
        $update->keuntungan = $request->keuntungan;
        $update->pemasukan = $request->pemasukan;
        $update -> save();
        return redirect('laporankeuangan');         

    }

    public function store(Request $request){
        $laporan = new LaporanKeuangan();
        $laporan->tanggal_laporan = $request->tanggal_laporan;        
        $laporan->save();
        
        return redirect('laporankeuangan');
    }
}
