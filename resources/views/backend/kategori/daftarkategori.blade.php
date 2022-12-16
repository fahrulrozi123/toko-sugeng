@extends('backend.template')

@section('kategori')
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">


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
                        <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                            <div class="flex">
                            <div class="py-1">
                                <svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg>
                            </div>
                            <div>
                                <strong>{{ $message }}</strong>
                            </div>
                            </div>
                        </div>
                        @endif
                        <br>
                        <table id="datatable1" class="table table-bordered table-striped">
                            <div class="col-lg-6">
                                <div class="btn-group w-100">
                                    <button class="text-white bg-gradient-to-r from-gray-500 via-gray-600 to-gray-700 hover:bg-gradient-to-br focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" data-toggle="modal" data-target="#tambah">
                                        <i class="fas fa-plus"></i> Add Category
                                    </button>
                                    <button type="submit" class="text-white bg-gradient-to-r from-gray-500 via-gray-600 to-gray-700 hover:bg-gradient-to-br focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                        <i class="fas fa-upload"></i> Start upload
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
                                    <a data-toggle="modal" data-target="#edit" href="/tampilkategori/{{ $row->id_kategori }}" class="btn btn-sm btn-flat btn-primary" style="border-radius: 30%">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-flat btn-danger hapusKategori" data-id_kategori="{{ $row->id_kategori }}" data-nama_kategori="{{ $row->nama_kategori }}" style="border-radius: 30%">
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
                                                        <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 edit">
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
                                        <div class="modal-footer btn-group">
                                            <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                                <i class="fa fa-save"></i> Simpan
                                            </button>
                                            <button type="Reset" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
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

