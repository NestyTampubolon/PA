<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Http\UploadedFile;

class DaftarmenuController extends Controller
{
    //

    public function index(){
        $produks = Produk::all();
        $number = 1;
        return view('layout.admin.daftarmenu.daftarmenu',compact('produks'));
    }

    public function edit($id_produk){
        $editproduks = Produk::find($id_produk);
        return view('layout.admin.daftarmenu.editmenu',compact('editproduks'));
    }

    public function tambah(){
        return view('layout.admin.daftarmenu.tambahmenu');
    }

    public function store(Request $request){
        $produks = new Produk();
       
        $produks->nama = $request->input('nama');
        $produks->harga = $request->input('harga');
        $produks->kategori = $request->input('kategori');
        
       
        $name = $request->file('gambar')->getClientOriginalName();
        $request->file('gambar')->move('gambarmenu',$name);
        $produks->gambar = $name;
        $produks->save();
        
        return redirect('daftarmenu');
    }
    


    public function update(Request $request, $id_produk){
        $update = Produk::find($id_produk);
        $file = $update->gambar;
        $file= $request->file('gambar')->getClientOriginalName();
        $request->file('gambar')->move('gambarmenu',$file);
        
        $update->nama = $request->nama;
        $update->harga = $request->harga;
        $update->gambar = $file;
        $update->kategori = $request->kategori;
        $update -> save();

        return redirect('daftarmenu');         

    }

    public function delete($id_produk){
        $deleteproduks = Produk::find($id_produk);
        if( $deleteproduks->delete()){
           return redirect()->back();
        }
  
    }
}
