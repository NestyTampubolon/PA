<?php

namespace App\Http\Controllers;
use App\Models\LaporanKeuangan;
use App\Models\Laporankeuangandetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporankeuangandetailController extends Controller
{
    //
    public function index($id_laporan){
        $laporan = LaporanKeuangan::find($id_laporan);
     
        $detail = DB::table('laporan_keuangandetail')
                    ->join('laporan_keuangan', 'laporan_keuangan.id_laporan','=','laporan_keuangandetail.id_laporan')
                    ->select('laporan_keuangandetail.*','laporan_keuangan.tanggal_laporan')
                    ->where('laporan_keuangandetail.id_laporan','=',$id_laporan)
                    ->get();
       

        // menampilkan total pengeluaran
        $total = DB::table('laporan_keuangandetail')
        ->join('laporan_keuangan', 'laporan_keuangan.id_laporan','=','laporan_keuangandetail.id_laporan')
        ->select('laporan_keuangan.id_laporan',DB::raw('SUM(jumlah_pengeluaran) as total'))
        ->groupBy('laporan_keuangandetail.id_laporan')
        ->where('laporan_keuangandetail.id_laporan','=',$id_laporan)
        ->get();

        $totaljoin = DB::table('pemesanan')
        ->join('laporan_keuangan', 'pemesanan.tanggal_pemesanan','=','laporan_keuangan.tanggal_laporan')
        ->select(DB::raw('sum(pemesanan.total_harga) as hargatotal'))   
        ->groupBy('pemesanan.tanggal_pemesanan') 
        ->where('pemesanan.keterangan','=','Selesai')  
        ->where('laporan_keuangan.id_laporan','=',$id_laporan)          
        ->get();
         
   
                    
        return view('layout.admin.laporankeuangan.laporankeuangandetail',compact('laporan','detail','total','totaljoin'));
    }

    public function store(Request $request){
        $detail = new Laporankeuangandetail();
        $detail->deskripsi = $request->deskripsi;
        $detail->id_laporan = $request->id_laporan;
        $detail->jumlah_pengeluaran = $request->harga;
        $detail->id_karyawan = auth()->id();
        $detail->save();
        
        return redirect()->back();
    }

    public function update(Request $request, $id_laporandetail){
        $update = Laporankeuangandetail::find($id_laporandetail);
        $update->deskripsi = $request->deskripsi;
        $update->jumlah_pengeluaran = $request->jumlah_pengeluaran;
        $update->id_karyawan = auth()->id();
        $update -> save();

        return redirect()->back();   

    }

    public function updatetotal(Request $request, $id_laporan){
        $update = LaporanKeuangan::find($id_laporan);
        $update->pengeluaran = $request->pengeluaran;
        $update->pemasukan = $request->pemasukan;
        $update->keuntungan = $request->pemasukan - $request->pengeluaran;
        $update -> save();
        return redirect('/laporankeuangan');   

    }


    public function delete($id_laporan){
        $delete = Laporankeuangandetail::find($id_laporan);
        if( $delete->delete()){
           return redirect()->back();
        }
  
    }
}
