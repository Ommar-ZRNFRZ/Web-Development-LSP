@extends('layouts.master')

@section('title', 'Daftar Assesor')

@section('content')
        @slot('title') Daftar Assesor @endslot
        @slot('li_1') Assesor @endslot
        @slot('li_2') Daftar @endslot
        
       

    <a href="{{ route('assesor.create') }}" class="btn add-btn">
        <i class="fa fa-plus"></i> Tambah Assesor
    </a>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id_Assesor</th>
                        <th>Nama</th>
                        <th>Reg_met</th>
                        <th>Lama_mengajar</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($assesors as $assesor)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $assesor->id_assesor }}</td>
                            <td>{{ $assesor->name }}</td>
                            <td>{{ $assesor->reg_met }}</td>
                            <td>{{ $assesor->lama_mengajar }}</td>
                            <td class="text-end">
                                <a href="{{ route('assesor.edit', $assesor->id) }}" class="btn btn-success btn-sm">Ubah</a>
                                <form action="{{ route('assesor.destroy', $assesor->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus assesor ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
