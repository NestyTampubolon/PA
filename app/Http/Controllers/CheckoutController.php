<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\Produk;
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

    }

    public function storepemesanan(Request $request){

        $keranjang = Keranjang::where('id_customer',auth()->id())->get();
        

        $pemesanan= new Pemesanan();
        $pemesanan->id_customer =  auth()->id();
        $pemesanan->tanggal_pemesanan = now();
        $pemesanan->total_harga = $request->total_harga;
        $pemesanan->nama_penerima = $request->nama_penerima;
        $pemesanan->alamat_penerima = $request->alamat_penerima;
        $pemesanan->metode_pembayaran = $request->metode_pembayaran;
        if ($request->hasFile('bukti_pembayaran')){
            $file= $request->file('bukti_pembayaran')->getClientOriginalName();
            $request->file('bukti_pembayaran')->move('bukti_pembayaran',$file);
            $pemesanan->gambar = $file;
        }
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

    public function delete(Request $request, $id_keranjang){
      
        
        
        $delete = Keranjang::find($id_keranjang);
        $produk = $delete->id_produk;
        $quantity = $delete->quantity;
        $deleteproduks = Produk::find($produk);
        $deleteproduks->stok = $deleteproduks->stok + $quantity;
        $deleteproduks->save();
        if( $delete->delete()){
           
           return redirect()->back();
        }
  
    }

}
