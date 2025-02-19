@extends('layouts.master')

@section('title', 'Edit Siswa')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('siswa.update',$student->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">NIS</label>
                    <input type="hidden" name="id" class="form-control" value="{{ old('id', $student->id) }}" required>
                    <input type="text" name="nis" class="form-control" value="{{ old('nis', $student->nis) }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $student->name) }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jurusan</label>
                    <select name="major" id="major" class="form-control" required>
                        <option value="" disabled selected>--Pilih Jurusan--</option>
                        <option value="TKJ" {{ $student->major == 'TKJ' ? 'selected' : '' }}>Teknik Komputer dan Jaringan</option>
                        <option value="RPL" {{ $student->major == 'RPL' ? 'selected' : '' }}>Rekayasa Perangkat Lunak</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Kelas</label>
                    <select name="class" id="class" class="form-control" required>
                        <option value="" disabled selected>--Pilih Kelas--</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
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

            // Fungsi untuk mengisi dropdown kelas sesuai jurusan yang dipilih
            function updateClassDropdown(selectedMajor, selectedClass) {
                classDropdown.innerHTML = '<option value="" disabled>--Pilih Kelas--</option>';

                if (classOptions[selectedMajor]) {
                    classOptions[selectedMajor].forEach(function (kelas) {
                        let option = document.createElement("option");
                        option.value = kelas;
                        option.textContent = kelas;
                        if (kelas === selectedClass) {
                            option.selected = true; // Menandai kelas yang sudah disimpan
                        }
                        classDropdown.appendChild(option);
                    });
                }
            }

            // Saat halaman dimuat, isi dropdown kelas sesuai dengan jurusan yang tersimpan
            const savedMajor = "{{ $student->major }}";
            const savedClass = "{{ $student->class }}";
            updateClassDropdown(savedMajor, savedClass);

            // Saat jurusan diubah, perbarui dropdown kelas
            majorDropdown.addEventListener("change", function () {
                updateClassDropdown(this.value, null);
            });
        });
    </script>
@endsection
