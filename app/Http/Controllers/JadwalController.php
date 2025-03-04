<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwals = Jadwal::all();
        return view('jadwal.index',compact('jadwal'));
    }

    public function create()
    {
        return view('jadwal.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'id_assessor' => 'required',
            'id_skema' => 'required',
            'tanggal' => 'required',
            'tempat' => 'required',
        ]);

        Jadwal::create($request->all());

        return redirect()->route('jadwal.index')->with('success', 'jadwal berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        return view('jadwal.edit', compact('jadwal'));
    }

    public function update(Request $request, $id)
    {
        $jadwal = Jadwal::find($id);

        $request->validate([
            'id' => 'required|unique:jadwal,nis,' . $jadwal->id, #ga yakin diapain kalo yang ini, mungkin salah
            'nis' => 'required',
            'id_assessor' => 'required',
            'id_skema' => 'required',
            'tanggal' => 'required',
            'tempat' => 'required',
        ]);

        $jadwal->nis = $request->nis;
        $jadwal->id_assessor = $request->id_assessor;
        $jadwal->id_skema = $request->id_skema;
        $jadwal->tanggal = $request->tanggal;
        $jadwal->tempat = $request->tempat;

        $jadwal->save();

        return redirect()->route('jadwal.index')->with('success', 'jadwal berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $jadwal = jadwal::find($id);
        $jadwal->delete();
        
        return redirect()->route('jadwal.index')->with('success', 'jadwal berhasil dihapus.');
    }
}
