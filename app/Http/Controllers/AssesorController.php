<?php

namespace App\Http\Controllers;

use App\Models\Assesor;
use Illuminate\Http\Request;

class AssesorController extends Controller
{
    public function index(){
        $assesors = Assesor::all();
        return view('assesor.index',compact('assesors'));
    }

    public function create()
    {
        return view('assesor.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_assesor' => 'required|unique:assesor',
            'name' => 'required',
            'reg_met' => 'required',
            'lama_mengajar' => 'required',
        ]);

        Assesor::create($request->all());

        return redirect()->route('assesor.index')->with('success', 'Assesor berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $assesor = Assesor::findOrFail($id);
        return view('assesor.edit', compact('assesor'));
    }

    public function update(Request $request, $id)
    {
        $assesor = Assesor::find($id);

        $request->validate([
            'id_assesor' => 'required|unique:assesor,id_Assesor,' . $assesor->id,
            'name' => 'required',
            'reg_met' => 'required',
            'lama_mengajar' => 'required',
        ]);

        $assesor->id_assesor = $request->id_assesor;
        $assesor->name = $request->name;
        $assesor->reg_met = $request->reg_met;
        $assesor->lama_mengajar = $request->lama_mengajar;

        $assesor->save();

        return redirect()->route('assesor.index')->with('success', 'Assesor berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $assesor = Assesor::find($id);
        $assesor->delete();
        
        return redirect()->route('assesor.index')->with('success', 'assesor berhasil dihapus.');
    }
}
