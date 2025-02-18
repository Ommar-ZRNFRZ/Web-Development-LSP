@extends('layouts.master')

@section('title', 'Tambah Skena')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('skema.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Id_Skema</label>
                    <input type="text" name="id_skema" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Skema</label>
                    <input type="text" name="nama_skema" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('skema.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection
