<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use Illuminate\Http\Request;

class TesController extends Controller
{
    public function index()
    {
        return view('tabel');
    }

    public function formTambah()
    {
        return view('tambah');
    }

    public function prosesTambah(Request $request)
    {

        // $data = $request->all();
        // dd($data);
        //$tambah = Gudang::create($data);

        // $tambah2 = Gudang::create([
        //     'nama_barang'
        // ]);

        $tambah3 = new Gudang;
        $tambah3->nama_barang = $request->nama_barang;
        $tambah3->stock = $request->stock;
        $tambah3->keterangan = $request->keterangan;
        $tambah3->tgl = $request->tgl;
        $tambah3->save();
        return redirect()->back();
    }
}
