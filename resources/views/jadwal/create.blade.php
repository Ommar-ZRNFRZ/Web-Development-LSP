@extends('layouts.master')

@section('title', 'Tambah Jadwal')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('jadwal.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">NIS</label>
                    <select name="id_siswa" class="form-control">
                    @foreach ($siswa as $item)
                        <option value="{{$item->id}}">{{ $item->nis }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Id_Assesor</label>
                    <input type="text" name="Id_assessor" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Id_Skema</label>
                    <input type="text" name="id_skema" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal</label>
                    <input type="Date" name="tanggal" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tempat</label>
                    <input type="text" name="tempat" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('jadwal.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection
