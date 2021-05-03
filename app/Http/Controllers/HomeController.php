<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Informasi;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    
    public function index()
    {
        $produks = Produk::inRandomOrder()->limit(6)->get();
        $customerid = DB::table('customer')
        ->where('username', '=',session('username'))  
        ->get();
        $informasi = Informasi::inRandomOrder()->limit(6)->get();
        return view('layout.template',compact('produks','informasi'));
    }
}
