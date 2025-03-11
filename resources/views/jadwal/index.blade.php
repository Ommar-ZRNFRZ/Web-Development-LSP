@extends('layouts.master')

@section('title', 'Daftar Jadwal')

@section('content')
        @slot('title') Daftar Jadwal @endslot
        @slot('li_1') Jadwal @endslot
        @slot('li_2') Daftar @endslot
        
    {{--harusnya ga ada yang salah..... harusnya. --}}

    <a href="{{ route('jadwal.create') }}" class="btn add-btn">
        <i class="fa fa-plus"></i> Tambah jadwal
    </a>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Id_Assesor</th>
                        <th>Id_Skema</th>
                        <th>Tanggal</th>
                        <th>Tempat</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jadwals as $jadwal)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $jadwal->nis }}</td>
                            <td>{{ $jadwal->id_assesor }}</td>
                            <td>{{ $jadwal->id_skema }}</td>
                            <td>{{ $jadwal->tanggal }}</td>
                            <td>{{ $jadwal->tempat }}</td>
                            <td class="text-end">
                                <a href="{{ route('jadwal.edit', $jadwal->id) }}" class="btn btn-success btn-sm">Ubah</a>
                                <form action="{{ route('jadwal.destroy', $jadwal->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus jadwal ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
