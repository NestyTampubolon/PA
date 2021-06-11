<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\PemesananDetail;
use App\Models\Pemesanan;
use App\Models\Keranjang;
use Illuminate\Support\Facades\DB;
class PesanController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id){
        $produks = Produk::find($id);
        $pesan = DB::table('keranjang')
        ->join('produk', 'produk.id_produk','=','keranjang.id_produk')
        ->where('produk.id_produk','=',$id)
        ->get();
        
        return view('layout.pesan',compact('produks','pesan'));
    }

 
   
    public function simpanpesanan(Request $request){
        $keranjang = new Keranjang();
        $keranjang->id_produk = $request->input('id_produk');
        $keranjang->quantity = $request->input('quantity');
        $keranjang->total = $request->input('quantity') * $request->input('harga');
        $keranjang->id_customer = auth()->id();
        $keranjang->save();

        $produks = Produk::find($request->id_produk);
        $produks->stok = $produks->stok - $request->quantity;
        $produks->save();
        return redirect()->back()->with('success', "Pesanan Anda berhasil disimpan di keranjang!");;
    }
   
}
