<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $students = Siswa::all();
        return view('siswa.index',compact('students'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_siswa' => 'required|unique:siswa',
            'name' => 'required',
            'Major' => 'required',
            'class' => 'required',
        ]);

        Siswa::create($request->all());

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $student = Siswa::findOrFail($id);
        return view('siswa.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Siswa::find($id);

        $request->validate([
            'id' => 'required|unique:siswa,nis,' . $student->id,
            'nis' => 'required',
            'name' => 'required',
            'major' => 'required',
            'class' => 'required',
        ]);

        $student->nis = $request->nis;
        $student->name = $request->name;
        $student->major = $request->major;
        $student->class = $request->class;

        $student->save();

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $student = Siswa::find($id);
        $student->delete();
        
        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil dihapus.');
    }
}
