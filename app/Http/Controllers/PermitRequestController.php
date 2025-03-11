<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PermitRequestController extends Controller
{
    public function index()
    {
        return view('permit-request.nis-form');
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

        return redirect()->route('permit-requests.form', ['nis' => $nis]);
    }

    public function showPermitForm($identity_number)
    {
        //
    }

    public function storePermitRequest(Request $request)
    {
        //
    }
}
