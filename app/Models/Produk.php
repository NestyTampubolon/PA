<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';
    protected $primaryKey = 'id_produk';

    public function PemesananDetail(){
    	return $this->hasMany('App\Models\PemesananDetail')->withDefault();
    }

    public function Keranjang(){
    	return $this->hasMany('App\Models\Keranjang');
    }
}
