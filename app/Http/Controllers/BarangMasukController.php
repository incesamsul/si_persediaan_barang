<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangMasuk;
use App\Models\Barang;


class BarangMasukController extends Controller
{
    public function index()
    {
        $data['barang'] = BarangMasuk::all();
        return view('pages.barang_masuk.index',$data);
    }


    public function create()
    {
        $data['barang'] = Barang::all();
        $data['edit'] = [];
        return view('pages.barang_masuk.create',$data);
    }

    public function store(Request $request) {
        BarangMasuk::create([
            'kode_barang'=> $request->kode_barang,
            'jumlah'=> $request->jumlah,
        ]);

        return redirect('/barang_masuk')->with('message', 'berhasil menyimpan data');
    }

    public function edit($id){
        $data['barang'] = BarangMasuk::find($id);
        return view('pages.barang_masuk.create',$data);
    }

    public function update(Request $request, $id){
        BarangMasuk::where('id', $id)->update([
            'kode_barang'=> $request->kode_barang,
            'nama_barang'=> $request->nama,
            'deskripsi'=> $request->deskripsi,
            'satuan'=> $request->satuan,
            'harga'=> $request->harga,
        ]);

        return redirect()->back()->with('message', 'berhasil mengupdate data');
    }

    public function destroy($id){
        $barang = BarangMasuk::find($id);
        $barang->delete();
        return redirect()->back()->with('message', 'berhasil menghapus data');
    }

}
