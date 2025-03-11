<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use App\Models\Siswa;
use App\Models\Assesor;
use App\Models\Skema;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PermitCheckController extends Controller
{
    public function index()
    {
        return view('permit-request.nis-check');
    }

    public function store(Request $request)
    {   
        $request->validate(
            [
                'nis' => [
                    'required',
                    Rule::exists('siswa', 'nis'),
                ],
            ],
            [
                'nis.required' => 'NIS wajib diisi!',
                'nis.exists' => 'Siswa tidak ditemukan!',
            ]
        );

        $nis = $request->nis;

        return redirect()->route('permit-requests.check', ['nis' => $nis]);
    }

    public function checkPermitRequest($nis)
    {
        // Cari siswa berdasarkan NIS
        $siswa = Siswa::where('nis', $nis)->first();

        if (!$siswa) {
            return redirect()->route('permit-requests.form-check')->withErrors(['nis' => 'NIS tidak ditemukan!']);
        }

        // Ambil jadwal terbaru berdasarkan siswa_id
        $jadwal = Jadwal::where('id_siswa', $siswa->id)
            ->latest('created_at') // Mengambil jadwal terbaru
            ->first();

        if ($jadwal) {
            $assesor = Assesor::where('id', $jadwal->id_assesor)->first();
            $skema = Skema::where('id', $jadwal->id_skema)->first();
        }
        
        $nama_asesor = $assesor ? $assesor->name : 'Tidak ditemukan';
        $nama_skema = $skema ? $skema->nama_skema : 'Tidak ditemukan';

        return view('permit-request.form-check', compact('jadwal', 'siswa', 'assesor', 'skema'));
    }



}