@extends('layout.master')
@section('title', 'Edit Petugas')
@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                <h3 class="card-title">Petugas</h3>
                    <div class="card card-primary">
                        <div class="card-header">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                        </ol>
                        </div>
                        <!-- /.card-header -->

                        <!-- form start -->
                        <form action="{{ route('petugas.update', $petugas[0]->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="id">Nama Petugas</label>
                                    <input type="text" class="form-control @error('id') is-invalid @enderror" name="id" id="id"
                                    placeholder="Masukan nama petugas" value="{{ $petugas[0]->nama_petugas}}">
                                </div>
                                <div class="form-group">
                                    <label for="jabatan_petugas">Jabatan</label>
                                    <input type="text" class="form-control @error('id') is-invalid @enderror" name="id" id="id"
                                    placeholder="Masukan jabatan" value="{{ $petugas[0]->jabatan_petugas}}">
                                </div>
                                <div class="form-group">
                                    <label>No. Telepon</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="text" class="form-control @error('id') is-invalid" @enderror name="id" id="id" class="form-control" data-inputmask='"mask": "(999) 999-9999"'
                                            data-mask placeholder="Masukan angka" value="{{ $petugas[0]->no_telp_petugas}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea  type="text"class="form-control @error('id')
                                    is-invalid @enderror" name="id" id="id" placeholder="Masukan alamat" value=">{{ $petugas[0]->alamat_petugas}}"></textarea>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>{{-- form --}}
            </div>
        </div>
    </div>
    <!-- /.content -->
@endsection