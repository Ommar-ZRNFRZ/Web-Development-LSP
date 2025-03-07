@extends('layouts.master')

@section('title', 'Edit Jadwal')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('jadwal.update',$jadwal->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">nis</label>
                    <input type="text" name="nis" class="form-control" value="{{ old ( 'nis', $jadwal->nis) }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Id_Assesor</label>
                    <input type="text" name="id_assessor" class="form-control" value="{{ old ( 'id_assessor', $jadwal->id_assessor) }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Id_Skema</label>
                    <input type="text" name="id_skema" class="form-control" value="{{ old ( 'id_skema', $jadwal->id_skema) }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" value="{{ old ( 'tanggal', $jadwal->tanggal) }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tempat</label>
                    <input type="text" name="tempat" class="form-control" value="{{ old ( 'tempat', $jadwal->tempat) }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('jadwal.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection
