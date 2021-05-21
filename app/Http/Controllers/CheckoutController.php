<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\Keranjang;
use App\Models\PemesananDetail;
use App\Models\LaporanKeuangan;
use Illuminate\Support\Facades\DB;
use Auth;
class CheckoutController extends Controller
{
    //
    
    public function index($id_customer){
        $pesan = DB::table('keranjang')
        ->join('users', 'keranjang.id_customer','=','users.user_id')
        ->join('produk', 'produk.id_produk','=','keranjang.id_produk')
        ->where('keranjang.id_customer','=',auth()->id())
        ->get();

       
        $total = DB::table('keranjang')
        ->select(DB::raw('SUM(total) as total')) 
        ->groupBy('id_customer')
        ->where('id_customer','=',auth()->id())
        ->get();

        
        $pembayaran = DB::table('keranjang')
        ->join('users', 'keranjang.id_customer','=','users.user_id')
        ->where('users.user_id','=',auth()->id())
        ->first();
        if(count($pesan) == 0){
            return redirect('/')->with('error', "Anda belum melakukan pemesanan");
        } else {
            
            return view('layout.checkout',compact('pesan','pembayaran','total'));
        }


        // $joinpemesanan = DB::table('pemesanan')
        // ->join('pemesanan_detail', 'pemesanan.id_pemesanan','=','pemesanan_detail.id_pemesanan')
        // ->select(DB::raw('sum(pemesanan_detail.jumlah_harga) as hargatotal'),'pemesanan.*') 
        // ->groupBy('pemesanan.id_pemesanan')
        // ->get();
        // return view('layout.admin.daftarpemesanan',compact('pemesanan','joinpemesanan'));
    }

    public function storepemesanan(Request $request){

        $keranjang = Keranjang::where('id_customer',auth()->id())->get();
        

        $pemesanan= new Pemesanan();
        $pemesanan->id_customer =  auth()->id();
        $pemesanan->tanggal_pemesanan = now();
        $pemesanan->total_harga = $request->total_harga;
        $name = $request->file('bukti_pembayaran')->getClientOriginalName();
        $request->file('bukti_pembayaran')->move('bukti_pembayaran',$name);
        $pemesanan->bukti_pembayaran = $name;
        if( $pemesanan->save()){
            
            foreach($keranjang as $keranjangs){
                $pemesanandetail = new PemesananDetail();
                $pemesanandetail->kuantitas = $keranjangs->quantity;
                $pemesanandetail->jumlah_harga = $keranjangs->total;
                $pemesanandetail->id_produk = $keranjangs->id_produk;
                $pemesanandetail->id_pemesanan = $pemesanan->id_pemesanan;
                $pemesanandetail->save();

            }  
            
            $deletekeranjang = Keranjang::where('id_customer',auth()->id());
            if( $deletekeranjang->delete()){
            }
    }
        return redirect()->back()->with('error', "Pemesanan sedang di proses");

    }

}
