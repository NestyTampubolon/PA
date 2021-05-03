<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemesananDetail extends Model
{
    use HasFactory;
    protected $table = 'pemesanan_detail';
    protected $primaryKey = 'id_pemesanan';

    public function pemesanan(){	
    	return $this->belongsTo('App\Models\Pemesanan','id_pemesanan');
    }

    public function produk(){	
    	return $this->belongsTo('App\Models\Produk')->withDefault();
    }
}
