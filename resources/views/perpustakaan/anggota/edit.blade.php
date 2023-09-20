@extends('layout.master')
@section('title', 'Edit Anggota')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Anggota</h1>
                </div><!-- /.col -->
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Anggota Edit</li>
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
                        <form action="{{ route('anggota.update', $anggota[0]->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="id">ID Anggota</label>
                                    <input type="text" class="form-control @error('id')
                                    is-invalid @enderror" disabled name="id" id="id" placeholder="Masukkan ID" value="{{ $anggota[0]->id}}">
                                </div>
                                <div class="form-group">
                                    <label for="kode_anggota">Kode Anggota</label>
                                    <input type="text" class="form-control @error('id') 
                                    is-invalid @enderror" name="kode_anggota" id="id"
                                    placeholder="Masukan kode" value="{{ $anggota[0]->kode_anggota}}">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control @error('id') is-invalid @enderror" name="id" id="nama_anggota" placeholder="Masukan nama" value="{{ $anggota[0]->nama_anggota}}">
                                </div>
                                <div class="form-group">
                                    <label for="jk">Jenis Kelamin</label>
                                    <select class="custom-select" name="jk_anggota">
                                    <option selected disabled></option>
                                    <option value="LAKI-LAKI">LAKI-LAKI</option>
                                    <option value="PEREMPUAN">PERUMPUAN</option>
                                    </select>
                                </div>
                                @error('jk')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
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
                                @error('jurusan')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label>No. Telepon</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="number" class="form-control" name="no_telp_anggota" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Masukan angka">
                                    </div>
                                </div>
                                @error('tlp')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="alamat_anggota" class="form-control" rows="3" placeholder="Masukan alamat"></textarea>
                                </div>
                                @error('alamat')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
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