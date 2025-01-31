@extends('layouts.master')

@section('content')
    @if (auth()->user()->level === 'wajib')
        <div class="row">
            <div class="col">
                <div class="card profile-card">
                    <div class="card-body">
                        <h5 class="card-title">Profil</h5>
                        <hr>
                        <form>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{ auth()->user()->username ?? '' }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Hak Akses</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="Pengguna" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">NIK</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{ auth()->user()->wajibRetribusi->nik ?? '' }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{ auth()->user()->wajibRetribusi->nama_lengkap ?? '' }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Telepon</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{ auth()->user()->wajibRetribusi->telepon ?? '' }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{ auth()->user()->wajibRetribusi->alamat ?? '' }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Kelurahan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{ auth()->user()->wajibRetribusi->kelurahan ?? '' }}">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection