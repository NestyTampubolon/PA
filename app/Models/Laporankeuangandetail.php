<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporankeuangandetail extends Model
{
    use HasFactory;
    protected $table = 'laporan_keuangandetail';
    protected $primaryKey = 'id_laporandetail';
}
