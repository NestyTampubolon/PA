<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class VerifikasiakunController extends Controller
{
    //
    public function index(){
        $customer = Customer::all();
        return view('layout.admin.verifikasiakun',compact('customer'));
    }

    public function update(Request $request, $id_customer){
        $update = Customer::find($id_customer);
        $update->keterangan = $request->keterangan;
        $update -> save();
        return redirect('verifikasiakun');         

    }

    public function delete($id_customer){
        $deletecustomer = Customer::find($id_customer);
        if( $deletecustomer->delete()){
           return redirect()->back();
        }  
    }
}
