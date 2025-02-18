@extends('layouts.master')

@section('title', 'Tambah Assesor')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('assesor.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Id_Assesor</label>
                    <input type="text" name="id_assesor" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Reg_met</label>
                    <input type="text" name="reg_met" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Lama_mengajar</label>
                    <input type="text" name="lama_mengajar" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('assesor.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection
