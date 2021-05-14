<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;
class VerifikasiakunController extends Controller
{
    //
    public function index(){
        $customer = User::where('role',0)->get();
        return view('layout.admin.verifikasiakun',compact('customer'));
    }

    public function update(Request $request, $user_id){
        $update = User::find($user_id);
        $update->keterangan = $request->keterangan;
        $update -> save();
        return redirect('verifikasiakun');         

    }

    public function delete($user_id){
        $deletecustomer = User::find($user_id);
        if( $deletecustomer->delete()){
           return redirect()->back();
        }  
    }
}
