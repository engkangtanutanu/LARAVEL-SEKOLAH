@extends('layout.master')
@section('h1', 'Data Petugas')
@section('content')

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <div class="content-wrapper">
                <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                <div class="col-sm-6">
                                <h3>DataTables</h3>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">DataTables</li>
                                </ol>
                            </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">DataTable with minimal features & hover style</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Petugas</th>
                                            <th>Jabatan</th>
                                            <th>No. Telepon</th>
                                            <th>Alamat</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($petugass as $key => $values)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $values->nama_petugas }}</td>
                                                <td>{{ $values->jabatan_petugas }}</td>
                                                <td>{{ $values->no_telp_petugas }}</td>
                                                <td>{{ $values->alamat_petugas }}</td>
                                                <td>
                                                <form action="{{ route('petugas.destroy', $values->id) }}" method="post">
                                             @csrf
                                            @method('DELETE')
                                             <a href="{{ route('petugas.show', $values->id) }}" class="btn-sm btn-info">Show</a>
                                            <a href="{{ route('petugas.edit', $values->id) }}" class="btn-sm btn-warning">Edit</a>
                                            <button type="submit" class="btn-danger btn-sm btn">Hapus</button>
                                            </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td>Data masih kosong</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1
                                    to 2 of 2 entries</div>
                            </div>
                            <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled" id="example2_previous"><a
                                                href="#" aria-controls="example2" data-dt-idx="0" tabindex="0"
                                                class="page-link">Previous</a></li>
                                        <li class="paginate_button page-item active"><a href="#"
                                                aria-controls="example2" data-dt-idx="1" tabindex="0"
                                                class="page-link">1</a></li>
                                        <li class="paginate_button page-item next disabled" id="example2_next"><a
                                                href="#" aria-controls="example2" data-dt-idx="2" tabindex="0"
                                                class="page-link">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
            </div>
        </div>
        
    </body>
@endsection