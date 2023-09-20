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
                                    <label for="nama_petugas">Nama Petugas</label>
                                    <input class="form-control" type="text" name="nama_petugas" id="nama_petugas"
                                        placeholder="Masukan nama petugas">
                                </div>
                                <div class="form-group">
                                    <label for="jabatan_petugas">Jabatan</label>
                                    <input class="form-control" type="text" name="jabatan_petugas" id="jabatan_petugas"
                                        placeholder="Masukan jabatan">
                                </div>
                                <div class="form-group">
                                    <label>No. Telepon</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="number" name="no_telp_petugas" class="form-control" data-inputmask='"mask": "(999) 999-9999"'
                                            data-mask placeholder="Masukan angka">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea  class="form-control" name="alamat_petugas" rows="3" placeholder="Masukan alamat"></textarea>
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