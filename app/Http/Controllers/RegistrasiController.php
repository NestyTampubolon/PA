<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class RegistrasiController extends Controller
{
    //
    public function index(){
        return view('layout.registrasi');
    }

    public function store(Request $request){
        $customer = new Customer();
       
        $customer->nama = $request->input('nama');
        $customer->username = $request->input('username');
        $customer->password = $request->input('password');
        $customer->jenis_kelamin = $request->input('jenis_kelamin');
        $customer->nomor_handphone = $request->input('nomor_handphone');
        $customer->alamat = $request->input('alamat');
        $customer->save();
        
        return redirect('login');
    }
}
