@extends('layouts.master')

@section('title', 'Daftar Skema')

@section('content')
        @slot('title') Daftar Skema @endslot
        @slot('li_1') Skema @endslot
        @slot('li_2') Daftar @endslot
        
       

    <a href="{{ route('skema.create') }}" class="btn add-btn">
        <i class="fa fa-plus"></i> Tambah Skema
    </a>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id_skema</th>
                        <th>Jurusan</th>
                        <th>Skema</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($skemas as $skema)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $skema->id_skema }}</td>
                            <td>{{ $skema->jurusan }}</td>
                            <td>{{ $skema->nama_skema }}</td>
                            <td class="text-end">
                                <a href="{{ route('skema.edit', $skema->id) }}" class="btn btn-success btn-sm">Ubah</a>
                                <form action="{{ route('skema.destroy', $skema->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus skema ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
