@extends('layouts.master')

@section('title', 'Daftar Siswa')

@section('content')
        @slot('title') Daftar Siswa @endslot
        @slot('li_1') Siswa @endslot
        @slot('li_2') Daftar @endslot
        
       

    <a href="{{ route('siswa.create') }}" class="btn add-btn">
        <i class="fa fa-plus"></i> Tambah Siswa
    </a>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Kelas</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $student->nis }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->major }}</td>
                            <td>{{ $student->class }}</td>
                            <td class="text-end">
                                <a href="{{ route('siswa.edit', $student->id) }}" class="btn btn-success btn-sm">Ubah</a>
                                <form action="{{ route('siswa.destroy', $student->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus siswa ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
