@extends('layouts.master')

@section('title', 'Detail Jadwal Siswa')

@section('content')

<div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-sm-6">
        <h4 class="text-center mb-4">Detail Jadwal Siswa: {{ $siswa->nama }}</h4>

        @if ($jadwal)
            <div class="card shadow mb-3">
                <div class="card-header">
                    Jadwal Terbaru
                </div>
                <div class="card-body">
                    <form class="row g-2">
                        <div class="row mb-2">
                            <label class="col-4 col-form-label"><strong>NIS:</strong></label>
                            <div class="col-8">
                                <input type="text" class="form-control" value="{{ $siswa->nis }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-4 col-form-label"><strong>Nama:</strong></label>
                            <div class="col-8">
                                <input type="text" class="form-control" value="{{ $siswa->name }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-4 col-form-label"><strong>Tanggal:</strong></label>
                            <div class="col-8">
                                <input type="text" class="form-control" value="{{ $jadwal->tanggal }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-4 col-form-label"><strong>Tempat:</strong></label>
                            <div class="col-8">
                                <input type="text" class="form-control" value="{{ $jadwal->tempat }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-4 col-form-label"><strong>Asesor:</strong></label>
                            <div class="col-8">
                                <input type="text" class="form-control" value="{{ $jadwal->id_assesor }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-4 col-form-label"><strong>Skema:</strong></label>
                            <div class="col-8">
                                <input type="text" class="form-control" value="{{ $skema->nama_skema }}" readonly>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @else
            <div class="alert alert-warning">
                Tidak ada jadwal yang tersedia.
            </div>
        @endif

        <a href="{{ route('index') }}" class="btn btn-secondary">Kembali</a>

        @if (!$jadwal)
            <a href="{{ route('siswa.jadwal.form', ['nis' => $siswa->nis]) }}" class="btn btn-primary">Ajukan Jadwal Baru</a>
        @endif
    </div>
</div>

@endsection
