<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasi;
class GalleryController extends Controller
{
    //
    public function index()
    {
        $informasi = Informasi::all();
        return view('layout.gallery',compact('informasi'));
    }
}
