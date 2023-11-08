<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index()
    {
        $data['barang'] = Barang::all();
        return view('pages.barang.index',$data);
    }


    public function create()
    {
        $data['barang'] = [];
        return view('pages.barang.create',$data);
    }

    public function store(Request $request) {
        Barang::create([
            'kode_barang'=> $request->kode_barang,
            'nama_barang'=> $request->nama,
            'deskripsi'=> $request->deskripsi,
            'satuan'=> $request->satuan,
            'harga'=> $request->harga,
        ]);

        return redirect()->back()->with('message', 'berhasil menyimpan data');
    }

    public function edit($id){
        $data['barang'] = Barang::find($id);
        return view('pages.barang.create',$data);
    }

    public function update(Request $request, $id){
        Barang::where('id', $id)->update([
            'kode_barang'=> $request->kode_barang,
            'nama_barang'=> $request->nama,
            'deskripsi'=> $request->deskripsi,
            'satuan'=> $request->satuan,
            'harga'=> $request->harga,
        ]);

        return redirect()->back()->with('message', 'berhasil mengupdate data');
    }

    public function destroy($id){
        $barang = Barang::find($id);
        $barang->delete();
        return redirect()->back()->with('message', 'berhasil menghapus data');
    }

}
