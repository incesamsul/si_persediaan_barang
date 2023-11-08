<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    use HasFactory;
    protected $table = 'barang_masuk';
    protected $guarded = [];

    public function barang(){
        return $this->belongsTo(Barang::class, 'kode_barang','kode_barang');
    }
}
