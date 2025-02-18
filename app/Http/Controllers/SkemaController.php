<?php

namespace App\Http\Controllers;

use App\Models\Skema;
use Illuminate\Http\Request;

class SkemaController extends Controller
{
    public function index(){
        $skemas = Skema::all();
        return view('skema.index',compact('skemas'));
    }

    public function create()
    {
        return view('skema.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_skema' => 'required|unique:skema',
            'jurusan' => 'required',
            'nama_skema' => 'required',
        ]);

        Skema::create($request->all());

        return redirect()->route('skema.index')->with('success', 'skema berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $skema = Skema::findOrFail($id);
        return view('skema.edit', compact('skema'));
    }

    public function update(Request $request, $id)
    {
        $skema = Skema::find($id);

        $request->validate([
            'id_skema' => 'required|unique:skema,id_skema,' . $skema->id,
            'jurusan' => 'required',
            'nama_skema' => 'required',
        ]);

        $skema->id_skema = $request->id_skema;
        $skema->jurusan = $request->jurusan;
        $skema->nama_skema = $request->nama_skema;

        $skema->save();

        return redirect()->route('skema.index')->with('success', 'skema berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $skema = Skema::find($id);
        $skema->delete();
        
        return redirect()->route('skema.index')->with('success', 'skema berhasil dihapus.');
    }
}
