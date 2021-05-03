<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    protected $table = 'pemesanan';
    protected $primaryKey = 'id_pemesanan';
    public function PemesananDetail(){
    	return $this->hasMany('App\Models\PemesananDetail');
    }

    public function LaporanKeuangan(){
    	return $this->hasMany('App\Models\LaporanKeuangan');
    }
}

