    @extends('layout.guestlayout')

    @section('title', 'Form Perizinan')

    @section('content')

    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-sm-6">
            <div class="card shadow">
                <div class="card-header text-center">
                    <h4>Form Perizinan</h4>
                </div>
                <div class="px-4 pt-2">
                    <x-alert />
                </div>
                <form action="{{ route('student.permit-requests.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row mb-3">
                            <label for="identity_number" class="col-lg-4 col-form-label">NIS:<span class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <input type="text" name="identity_number" value="{{ $identity_number }}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="name" class="col-lg-4 col-form-label">Nama:<span class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <input type="text" name="name" value="{{ $studentName }}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="tanggal" class="col-lg-4 col-form-label">Tanggal:<span class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <input type="date" name="date" value="{{ $date }}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-lg-4 col-form-label">Jenis Izin:<span class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <select class="form-control select select2-hidden-accessible" name="type">
                                    <option disabled {{ old('type') == null ? 'selected' : '' }}>Pilih Jenis Izin</option>
                                    <option value="go_home" {{ old('type') == 'go_home' ? 'selected' : '' }}>Pulang</option>
                                    <option value="go_out" {{ old('type') == 'go_out' ? 'selected' : '' }}>Keluar Sementara</option>
                                </select>
                                @if ($errors->has('type'))
                                <span class="text-danger">{{ $errors->first('type') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="keterangan" class="col-lg-4 col-form-label">Keterangan:<span class="text-danger">*</span></label>
                            <div class="col-lg-8">
                            <textarea name="reason" class="form-control @error('reason') is-invalid @enderror">{{ old('reason') }}</textarea>
                                </textarea>
                                <div class="invalid-feedback">
                                    @error('reason')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="lampiran" class="col-lg-4 col-form-label">Lampiran:</label>
                            <div class="col-lg-8">
                                <input type="file" name="attachment" accept="image/*,application/pdf" class="form-control @error('attachment') is-invalid @enderror" value="{{ old('attachment') }}">
                                <div class="invalid-feedback">
                                    @error('attachment')    
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
                        <button type="submit" class="btn btn-info text-white">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection