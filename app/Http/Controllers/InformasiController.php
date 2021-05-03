<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasi;
class InformasiController extends Controller
{
    //
    public function index(){
        $informasi = Informasi::all();
        return view('layout.admin.informasi.informasi',compact('informasi'));
    }

    public function tambah(){
        return view('layout.admin.informasi.tambahinformasi');
    }


    public function store(Request $request){
        $store = new Informasi();
       
        $store->deskripsi = $request->input('deskripsi');

        if ($request->hasFile('gambar')){
            $file= $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('image',$file);
            $store->gambar = $file;
        } 
        $store->save();
        
        return redirect('informasi');
    }
    public function edit($id_informasi){
        $informasi = Informasi::find($id_informasi);
        return view('layout.admin.informasi.editinformasi',compact('informasi'));
    }


    public function update(Request $request, $id_informasi){
        $update = Informasi::find($id_informasi);
        $file = $update->gambar;
        
        if ($request->hasFile('gambar')){
            $file= $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('image',$file);
            $update->gambar = $file;
        } 
        $update->deskripsi = $request->deskripsi;
       
        $update -> save();

        return redirect('informasi');         

    }

    public function delete($id_informasi){
        $deleteinformasi = Informasi::find($id_informasi);
        if( $deleteinformasi->delete()){
           return redirect()->back();
        }
  
    }
}
