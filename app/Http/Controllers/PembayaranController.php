<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\Keranjang;
use Illuminate\Support\Facades\DB;
class PembayaranController extends Controller
{
    //
    public function index(){
        $pemesanan = Pemesanan::all();
        $pesan = DB::table('pemesanan')
        ->select('customer.*','customer.nama as namacustomer','pemesanan.*' )
        ->join('customer', 'pemesanan.id_customer','=','customer.id_customer')
        ->where('customer.id_customer','=',session('id'))
        ->first();
        return view('layout.pembayaran',compact('pemesanan','pesan'));
    }
    
}
