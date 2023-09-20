@extends('layout.master')
@section('title', 'Buku')
@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                <h3 class="card-title">Buku</h3>
                    <div class="card card-primary">
                        <div class="card-header">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Buku</li>
                        </ol>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('buku.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="kode">Kode Buku</label>
                                    <input class="form-control" type="text" name="kode" id="kode"
                                        placeholder="Masukan kode">
                                </div>
                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input class="form-control" type="text" name="judul" id="judul"
                                        placeholder="Masukan judul">
                                </div>
                                <div class="form-group">
                                    <label for="penulis" name="penulis" id="penulis">Penulis</label>
                                    <input class="form-control" type="text" name="penulis" id="penulis"
                                        placeholder="Masukan nama penulis">
                                </div>
                                <div class="form-group">
                                    <label for="penerbit" name="penerbit" id="penerbit">Penerbit</label>
                                    <input class="form-control" type="text" name="penerbit" id="penerbit"
                                        placeholder="Masukan nama penerbit">
                                </div>
                                <div class="form-group">
                                    <label for="tahun" name="tahun" id="tahun">Tahun Terbit</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                        </div>
                                        <input class="form-control" type="number" name="tahun" id="tahun">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="stok" name="stok" id="stok">Stok Buku</label>
                                    <input class="form-control" type="number" name="stok"
                                        id="stok"placeholder="Masukan angka">
                                </div>
                            </div>


                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>
@endsection

</html>