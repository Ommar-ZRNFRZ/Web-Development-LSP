@extends('layouts.master')

@section('title', 'Edit Assesor')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('assesor.update',$assesor->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Id_Assesor</label>
                    <input type="text" name="id_assesor" class="form-control" value="{{ old ( 'id_assesor', $assesor->id_assesor) }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control" value="{{ old ( 'name', $assesor->name) }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Reg_met</label>
                    <input type="text" name="reg_met" class="form-control" value="{{ old ( 'reg_met', $assesor->reg_met) }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Lama_mengajar</label>
                    <input type="text" name="lama_mengajar" class="form-control" value="{{ old ( 'lama_mengajar', $assesor->lama_mengajar) }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('assesor.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection
