<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;

class LaporanController extends Controller
{
    public function index()
    {
        $data['barang_masuk'] = BarangMasuk::all();
        $data['barang_keluar'] = BarangKeluar::all();
        return view('pages.laporan.index',$data);
    }
}
