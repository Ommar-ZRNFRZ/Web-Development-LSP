<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $students = Siswa::all();
        return view('siswa.index', compact('students'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|unique:siswa,nis|size:8',
            'name' => 'required',
            'major' => 'required',
            'class' => 'required',
        ], [
            'nis.required' => 'NIS harus diisi!',
            'nis.unique' => 'NIS sudah ada!',
            'nis.size' => 'NIS harus tepat 8 karakter!',
            'name.required' => 'Nama harus diisi!',
            'major.required' => 'Jurusan harus diisi!',
            'class.required' => 'Kelas harus diisi!',
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
        $student = Siswa::findOrFail($id);

        $request->validate([
            'nis' => 'required|size:8|unique:siswa,nis,' . $id,
            'name' => 'required',
            'major' => 'required',
            'class' => 'required',
        ], [
            'nis.required' => 'NIS harus diisi!',
            'nis.unique' => 'NIS sudah ada!',
            'nis.size' => 'NIS harus tepat 8 karakter!',
            'name.required' => 'Nama harus diisi!',
            'major.required' => 'Jurusan harus diisi!',
            'class.required' => 'Kelas harus diisi!',
        ]);

        $student->update([
            'nis' => $request->nis,
            'name' => $request->name,
            'major' => $request->major,
            'class' => $request->class,
        ]);

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $student = Siswa::findOrFail($id);
        $student->delete();

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil dihapus.');
    }
}
