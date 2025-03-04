<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Session;

class StudentAuthController extends Controller
{
    /**
     * Menampilkan halaman login siswa
     */
    public function showLoginForm()
    {
        return view('auth.student-login');
    }

    /**
     * Proses login siswa menggunakan NIS
     */
    public function login(Request $request)
    {
        $request->validate([
            'identity_number' => 'required|exists:students,nis',
        ], [
            'identity_number.required' => 'NIS wajib diisi.',
            'identity_number.exists' => 'NIS tidak ditemukan.',
        ]);

        $student = Student::where('nis', $request->identity_number)->first();

        if (!$student) {
            return redirect()->back()->withErrors(['identity_number' => 'NIS tidak valid.']);
        }

        // Simpan data siswa ke sesi
        Session::put('student_id', $student->id);
        Session::put('student_name', $student->name);

        return redirect()->route('dashboard')->with('success', 'Login berhasil!');
    }

    /**
     * Logout siswa
     */
    public function logout()
    {
        Session::forget('student_id');
        Session::forget('student_name');

        return redirect()->route('login')->with('success', 'Logout berhasil.');
    }
}
