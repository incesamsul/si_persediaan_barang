<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\BarangKeluar;


class BarangKeluarController extends Controller
{
    public function index()
    {
        $data['barang'] = BarangKeluar::all();
        return view('pages.barang_keluar.index',$data);
    }


    public function create()
    {
        $data['barang'] = Barang::all();
        $data['edit'] = [];
        return view('pages.barang_keluar.create',$data);
    }

    public function store(Request $request) {
        BarangKeluar::create([
            'kode_barang'=> $request->kode_barang,
            'jumlah'=> $request->jumlah,
        ]);

        return redirect('/barang_keluar')->with('message', 'berhasil menyimpan data');
    }

    public function edit($id){
        $data['barang'] = BarangKeluar::find($id);
        return view('pages.barang_keluar.create',$data);
    }

    public function update(Request $request, $id){
        BarangKeluar::where('id', $id)->update([
            'kode_barang'=> $request->kode_barang,
            'nama_barang'=> $request->nama,
            'deskripsi'=> $request->deskripsi,
            'satuan'=> $request->satuan,
            'harga'=> $request->harga,
        ]);

        return redirect()->back()->with('message', 'berhasil mengupdate data');
    }

    public function destroy($id){
        $barang = BarangKeluar::find($id);
        $barang->delete();
        return redirect()->back()->with('message', 'berhasil menghapus data');
    }

}
