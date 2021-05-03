<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Karyawan;
use App\Models\Produk;
use Illuminate\Support\Facades\DB;
class LoginController extends Controller
{
    //
    public function index(){
        return view('layout.login');
    }


    public function logincustomer(Request $request){
        $customer = Customer::where('username',$request->username)
        ->where('PASSWORD',$request->PASSWORD)
        ->where('Keterangan','Verifikasi')
        ->get();
        $customerid = DB::table('customer')
        ->where('username', '=', $request->username)
        ->where('PASSWORD', '=', $request->PASSWORD)
        ->get();
        if(count($customer)!= 0){

            $data = $request->input();
            $request->session()->put('username',$data['username']);
            $request->session()->put('id',$customerid[0]->id_customer);
            
                  return redirect('/');
        }else{
            return redirect('/');
        }
       
    }

    public function logout(Request $request){
        $request->session()->forget('username');
        return redirect('/');
    }

    public function loginkaryawan(Request $request){
        $karyawan = Karyawan::where('username',$request->username)
        ->where('PASSWORD',$request->PASSWORD)
        ->get();
        
        
        if(count($karyawan)!= 0){
            $data = $request->input();
            $request->session()->put('usernamekaryawan',$data['username']);

            // $admin= Karyawan::where('username',$request->username)
            //  ->where('PASSWORD',$request->PASSWORD)
            //  ->where('role','1')
            // ->get();
            //     if(count($admin)!=0){
            //         return redirect('/daftarmenu');
            //     }else{
            //         return redirect('/daftarpemesanan');
            //     }


            // $request->session()->put('role',$karyawan->role);
            // var_dump($role);
            // die();
            // var_dump($data);
            // die();
            // if(($karyawan->role) == 0){
            // $produks = Produk::all();
           
            // return view('layout.admin.daftarmenu.daftarmenu',compact('produks'));
            // }else{
            //     return redirect('/');
            // }
            return redirect('daftarpemesanan');
        }else{
            return redirect('/login');
        }
    }


    public function registrasi(){
     
        return view('layout.registrasi');
    }


}
