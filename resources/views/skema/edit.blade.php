@extends('layouts.master')

@section('title', 'Edit Skema')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('skema.update',$skema->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Id_Skema</label>
                    <input type="text" name="id_skema" class="form-control" value="{{ old ( 'id_skema', $skema->id_skema) }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" value="{{ old ( 'jurusan', $skema->jurusan) }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Skema</label>
                    <input type="text" name="nama_skema" class="form-control" value="{{ old ( 'nama_skema', $skema->nama_skema) }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('skema.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection
