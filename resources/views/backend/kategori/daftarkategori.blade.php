@extends('backend.template')

@section('kategori')
    <li class="nav-item">
        <a href="#" class="nav-link active">
        <i class="nav-icon fas fa-edit"></i>
        <p>
            Categori
            <i class="fas fa-angle-left right"></i>
        </p>
        </a>
        <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="daftarkategori" class="nav-link active">
            <i class="far fa-circle nav-icon"></i>
            <p>Daftar Category</p>
            </a>
        </li>
        </ul>
    </li>
@endsection
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Category</h3>
                    </div>
                    <div class="card-body">
                        @if ($message = Session::get('sukses'))
                            <div class="alert alert-success alert-block">
                                <i class="fa fa-check icon"></i>
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <table id="datatable1" class="table table-bordered table-striped">
                            <div class="col-lg-6">
                                <div class="btn-group w-100">
                                    <span class="btn btn-sm btn-flat btn-success col fileinput-button" data-toggle="modal" data-target="#tambah">
                                        <i class="fas fa-plus"></i>
                                        <span>Add Category</span>
                                    </span>
                                    <button type="submit" class="btn btn-sm btn-flat  btn-primary col start">
                                        <i class="fas fa-upload"></i>
                                        <span>Start upload</span>
                                    </button>
                                    <button type="reset" class="btn btn-sm btn-flat btn-warning col cancel">
                                        <i class="fas fa-times-circle"></i>
                                        <span>Cancel upload</span>
                                    </button>
                                    </div>
                                </div>
                            </div>
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Category</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach ($data as $row)
                            <tr>
                                <th scope="row">{{ $i; }}</th>
                                <td>{{ $row->nama_kategori }}</td>
                                <td>
                                    <a data-toggle="modal" data-target="#edit" href="/tampilkategori/{{ $row->id_kategori }}" class="btn btn-sm btn-flat btn-primary">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-flat btn-danger hapusKategori" data-id_kategori="{{ $row->id_kategori }}" data-nama_kategori="{{ $row->nama_kategori }}">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </a>
                                </td>
                            </tr>
                            <!-- Modal EDIT -->
                            <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: rgb(1, 1, 41)">
                                            <h3 style="color: #fff">Edit Category</h3>
                                            <button type="button" class="close" data-dismiss="modal" style="color: #fff">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="/updatekategori/{{ $row->id_kategori }}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="card card-default">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Edit Category</h3>
                                                        <div class="card-tools">
                                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                                <i class="fas fa-minus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="form-group row">
                                                                <label for="nama_kategori" class="col-lg-3 col-lg-offset-1 control-label">Kategori</label>
                                                                <div class="col-lg-8">
                                                                    <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" value="{{ $row->nama_kategori }}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-sm btn-flat btn-primary edit">
                                                            <i class="fa fa-save"></i> Ubah
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++;?>
                            @endforeach
                        </tfoot>
                        </table>

                        {{-- MODAL TAMBAH --}}
                        <div id="tambah" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header" style="background-color: rgb(1, 1, 41)">
                                    <h3 style="color: #fff;">Tambah Category</h3>
                                    <button type="button" class="close" data-dismiss="modal" style="color: #fff">&times;</button>
                                </div>
                                <form method="post" action="tambahdata" enctype="multipart/form-data">
                                @csrf
                                    <div class="modal-body">
                                        <div class="card card-default">
                                            <div class="card-header">
                                                <h3 class="card-title">Tambah Category</h3>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="form-group row">
                                                    <label for="nama_kategori" class="col-lg-3 col-lg-offset-1 control-label">Kategori</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" name="nama_kategori" id="nama_kategori" class="form-control @error('nama_kategori') is-invalid @enderror"  autofocus>
                                                        @error('nama_kategori')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-sm btn-flat btn-primary">
                                                <i class="fa fa-save"></i> Simpan
                                            </button>
                                            <button type="reset" class="btn btn-sm btn-flat btn-danger">
                                                <i class="fa fa-arrow-circle-left"></i> Reset
                                            </button>
                                        </div>
                                    </div>
                                </form>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

