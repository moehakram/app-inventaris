<?php

namespace App\Http\Controllers\Inventaris;

use App\Http\Controllers\Controller;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    function index(){
        $gudang = Lokasi::all();
        return view('admin.inventaris.gudang', compact('gudang'));
    }

    function create(){
        return response()->view('admin.inventaris.create-gudang');
    } 

    function store(Request $request){
        $request->validate([
            'nama_gudang' => ['required', 'max:20'],
            'keterangan' => ['nullable', 'max:50']
        ]);

        Lokasi::create([
            'nama_gudang' => $request->nama_gudang,
            'keterangan' => $request->keterangan
        ]);

        return redirect()->route('ruang.index')->with('alert', 'success')->with('message', 'Berhasil menambahkan gudang inventaris');

    }

    function edit($id)
    {
        $gudang = Lokasi::where('id', $id)->first();
        return view('admin.inventaris.edit-gudang', compact('gudang'));
    }

    function update($id, Request $request)
    {
        $request->validate([
            'nama_gudang' => ['required', 'max:20'],
            'keterangan' => ['nullable', 'max:50']
        ]);

        $gudang = Lokasi::where('id', $id)->first();
        $gudang->nama_gudang = $request->nama_gudang;

        if($keterangan = $request->keterangan){
            $gudang->keterangan = $keterangan;
        }

        $gudang->update();

        return redirect()->route('ruang.index')->with('alert', 'success')->with('message', 'Berhasil mengedit gudang inventaris');
       }

    function destroy($id){
        Lokasi::find($id)->delete();
        return redirect()->route('ruang.index')
        ->with('alert', 'success')->with('message', 'Berhasil hapus gudang inventaris');
    }
}
