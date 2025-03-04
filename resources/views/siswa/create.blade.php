@extends('layouts.master')

@section('title', 'Tambah Siswa')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('siswa.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">NIS</label>
                    <input type="text" name="nis" class="form-control" required>
                    @error('nis')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control" required>
                    @error('name')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Jurusan</label>
                    <select name="major" id="major" class="form-control" required>
                        <option value="" disabled selected>--Pilih Jurusan--</option>
                        <option value="TKJ">Teknik Komputer dan Jaringan</option>
                        <option value="RPL">Rekayasa Perangkat Lunak</option>
                    </select>
                    @error('major')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Kelas</label>
                    <select name="class" id="class" class="form-control" required>
                        <option value="" disabled selected>--Pilih Kelas--</option>
                    </select>
                    @error('class')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Pastikan elemen tersedia
            const majorDropdown = document.getElementById("major");
            const classDropdown = document.getElementById("class");
    
            if (!majorDropdown || !classDropdown) {
                console.error("Dropdown tidak ditemukan.");
                return;
            }
    
            // Data kelas berdasarkan jurusan
            const classOptions = {
                "TKJ": ["X TKJ 1", "X TKJ 2", "XI TKJ 1", "XI TKJ 2", "XII TKJ 1", "XII TKJ 2"],
                "RPL": ["X RPL 1", "X RPL 2", "XI RPL 1", "XI RPL 2", "XII RPL 1", "XII RPL 2"]
            };
    
            // Event listener untuk perubahan jurusan
            majorDropdown.addEventListener("change", function () {
                const selectedMajor = this.value;
    
                // Hapus semua opsi kelas sebelum menambahkan yang baru
                classDropdown.innerHTML = '<option value="" disabled selected>--Pilih Kelas--</option>';
    
                // Jika jurusan dipilih, tambahkan kelas yang sesuai
                if (classOptions[selectedMajor]) {
                    classOptions[selectedMajor].forEach(function (kelas) {
                        let option = document.createElement("option");
                        option.value = kelas;
                        option.textContent = kelas;
                        classDropdown.appendChild(option);
                    });
                }
            });
        });
    </script>
@endsection
