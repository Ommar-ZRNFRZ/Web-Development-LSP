@extends('layouts.master')

@section('title', 'Form NIS')
@section('content')

<div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-sm-6">
        <div class="card shadow">
            <div class="card-header text-center">
                <h4>Form Pengisian NIS</h4> <!-- Judul di bagian atas card -->
            </div>
            <div class="px-4 pt-2">
                <x-alert />
            </div>
            <form action="{{ url('permit-requests/form') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">NIS <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="number" id="nis" name="nis" class="form-control @error('nis') is-invalid @enderror" value="{{ old('nis') }}" autofocus>
                            <div class="invalid-feedback">
                                @error('nis')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer text-end">
                    <span class="text-muted float-start">
                        <strong class="text-danger">*</strong> Harus diisi
                    </span>
                <a href="{{ route('index') }}" class="btn btn-secondary">Kembali</a>
                    <button class="btn btn-info text-white" type="submit">Lanjutkan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection