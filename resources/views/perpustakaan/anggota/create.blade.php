@extends('layout.master')
@section('title', 'Anggota')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Anggota</h1>
                </div><!-- /.col -->
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Anggota</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Anggota</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('anggota.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="id">ID Anggota</label>
                                    <input type="text" class="form-control" id="id" placeholder="Masukkan ID" name="id_anggota">
                                </div>
                                <div class="form-group">
                                    <label for="kode_anggota">Kode Anggota</label>
                                    <input type="text" class="form-control" id="kode_anggota" placeholder="Masukan kode" name="kode_anggota">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Masukan nama" name="nama_anggota">
                                </div>
                                <div class="form-group">
                                    <label for="jk">Jenis Kelamin</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="l" name="jk_anggota" value="L">
                                        <label for="l" class="custom-control-label">Laki-laki</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="p" name="jk_anggota" value="P">
                                        <label for="p" class="custom-control-label">Perempuan</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Jurusan</label>
                                    <select class="custom-select" name="jurusan_anggota">
                                        <option selected disabled>Pilih Jurusan</option>
                                        <option value="RPL">RPL</option>
                                        <option value="DPIB">DPIB</option>
                                        <option value="TP">TP</option>
                                        <option value="TFLM">TFLM</option>
                                        <option value="TEI">TEI</option>
                                        <option value="TITL">TITL</option>
                                        <option value="TKJ">TKJ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>No. Telepon</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="number" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Masukan angka" name="no_telp_anggota">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="alamat_anggota" class="form-control" rows="3" placeholder="Masukan alamat"></textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <!-- /.content -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
                    @endsection