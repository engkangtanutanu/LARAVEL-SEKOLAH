@extends('layout.master')
@section('title', 'Petugas')
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
                        <li class="breadcrumb-item active">Petugas</li>
                        </ol>
                        </div>
                        <!-- /.card-header -->

                        <!-- form start -->
                        <form action="{{ route('petugas.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="id">Nama Petugas</label>
                                    <input class="form-control" type="text" name="id" id="id"
                                    placeholder="Masukan nama petugas" value="{{ $petugas[0]->nama_petugas }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="jabatan_petugas">Jabatan</label>
                                    <input class="form-control" type="text" neme="jabatan_petugas" id="jabatan_petugas"
                                    placeholder="Masukan jabatan" value="{{ $petugas[0]->jabatan_petugas }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>No. Telepon</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input class="form-control" name="no_telp_petugas" value="{{ $petugas[0]->no_telp_petugas }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                <label for="alamat_petugas" name="alamat_petugas" id="alamat_petugas">Alamat</label>
                                <input class="form-control" type="text" name="alamat_petugas" id="alamat_petugas" placeholder="Masukan Alamat" value="{{ $petugas[0]->alamat_petugas }}" disabled>
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