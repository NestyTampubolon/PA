<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\Keranjang;
use App\Models\PemesananDetail;
use App\Models\LaporanKeuangan;
use Illuminate\Support\Facades\DB;
class CheckoutController extends Controller
{
    //
    public function index($id_customer){
    
        $pemesanan = Pemesanan::all();
        $pesan = DB::table('keranjang')
        ->join('customer', 'keranjang.id_customer','=','customer.id_customer')
        ->join('produk', 'produk.id_produk','=','keranjang.id_produk')
        ->where('customer.id_customer','=',session('id'))
        ->get();
        $pembayaran = DB::table('pemesanan')
        ->select('customer.*','customer.nama as namacustomer','pemesanan.*' )
        ->join('customer', 'pemesanan.id_customer','=','customer.id_customer')
        ->where('customer.id_customer','=',session('id'))
        ->first();
        
        if(count($pesan) == 0){
            return redirect('/menu');
        } else {
            
            return view('layout.checkout',compact('pemesanan','pesan','pembayaran'));
        }


      



        // $joinpemesanan = DB::table('pemesanan')
        // ->join('pemesanan_detail', 'pemesanan.id_pemesanan','=','pemesanan_detail.id_pemesanan')
        // ->select(DB::raw('sum(pemesanan_detail.jumlah_harga) as hargatotal'),'pemesanan.*') 
        // ->groupBy('pemesanan.id_pemesanan')
        // ->get();
        // return view('layout.admin.daftarpemesanan',compact('pemesanan','joinpemesanan'));
    }

    public function storepemesanan(Request $request){
        //                

        $keranjang = Keranjang::where('id_customer',session('id'))->get();
        
        // var_dump($simpankeranjang);
        // die();

        $temp = 0;
        foreach($keranjang as $keranjangs){
            $temp = $temp + $keranjangs->total;
        }
        $pemesanan= new Pemesanan();
        $pemesanan->id_customer =  session('id');
        $pemesanan->tanggal_pemesanan = now();
        $pemesanan->total_harga = $temp;
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
            
            $deletekeranjang = Keranjang::where('id_customer',session('id'));
            if( $deletekeranjang->delete()){
            }
    }
        return redirect()->back();

    }

}
