@extends('layout.master')
@section('title','Data Anggota')
@section('content')
<!-- /.card-header -->
<div class="card-body table-responsive p-0" style="height: 500px;">
    <table class="table table-head-fixed text-nowrap">
        <thead>
            <tr>
                <th>No</th>
                <th>Id</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Jurusan</th>
                <th>No Telp</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($anggotas as $key=>$value)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $value->id }}</td>
                <td>{{ $value->kode_anggota }}</td>
                <td>{{ $value->nama_anggota }}</td>
                <td>{{ $value->jk_anggota }}</td>
                <td>{{ $value->jurusan_anggota }}</td>
                <td>{{ $value->no_telp_anggota }}</td>
                <td>{{ $value->alamat_anggota }}</td>
                <td>
                    <form action="{{ route('anggota.destroy', $value->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('anggota.show', $value->id) }}" class="btn-sm btn-info">Show</a>
                        <a href="{{ route('anggota.edit', $value->id) }}" class="btn-sm btn-warning">Edit</a>
                        <button type="submit" class="btn-danger btn-sm btn">Hapus</button>
                    </form>
                    
                </td>
            </tr>
            @empty
            <tr>Data is empty</tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection