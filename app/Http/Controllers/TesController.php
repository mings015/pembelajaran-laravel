<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use Illuminate\Http\Request;

class TesController extends Controller
{
    public function index()
    {
        $gudang = Gudang::all();
        return view('tabel', [
            'gudang' => $gudang
        ]);
    }

    public function formTambah()
    {
        return view('tambah');
    }

    public function update($id)
    {
        $gudang = Gudang::find($id);
        return view('update', [
            'data' => $gudang
        ]);
    }


    public function prosesUpdate(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'nullable|string', //required = harus di isi
            'stock' => 'nullable|numeric',
            'keterangan' => 'nullable',
            'tgl' => 'nullable|date',
        ], [
            'stock.numeric' => 'stock harus angka',
        ]);

        $gudang = Gudang::find($id);
        $data = $request->all();
        $gudang->update($data);
        return redirect()->route('index.tabel')->with('message', 'sukseski update');
    }

    public function prosesTambah(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string', //required = harus di isi
            'stock' => 'required|numeric',
            'keterangan' => 'required',
            'tgl' => 'required|date',
        ], [
            'stock.numeric' => 'stock harus angka',
        ]);

        //cara cepat
        $data = $request->all();
        //dd($data);
        Gudang::create($data);

        return redirect()->route('index.tabel')->with('message', 'sukseski');

        //cara mid
        // $tambah2 = Gudang::create([
        //     'nama_barang' => $data['nama_barang'];
        // 'stock' => $data['stock'];
        // 'keterangan' => $data['keterangan'];
        // 'tgl' => $data['tgl'];
        // ]);

        //cara lambat
        // $tambah3 = new Gudang;
        // $tambah3->nama_barang = $request->nama_barang;
        // $tambah3->stock = $request->stock;
        // $tambah3->keterangan = $request->keterangan;
        // $tambah3->tgl = $request->tgl;
        // $tambah3->save();
        //return redirect()->back();
    }

    public function delete($id)
    {
        $gudang = Gudang::find($id);
        $gudang->delete();
        return redirect()->route('index.tabel')->with('message', 'sukseski hapus');
    }
}
