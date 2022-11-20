@extends('backend.template')

@section('produk')
    <li class="nav-item">
        <a href="#" class="nav-link active">
        <i class="nav-icon fas fa-edit"></i>
        <p>
            Product
            <i class="fas fa-angle-left right"></i>
        </p>
        </a>
        <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="daftarproduk" class="nav-link active">
            <i class="far fa-circle nav-icon"></i>
            <p>Daftar produk</p>
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
                        <h3 class="card-title">Daftar Produk</h3>
                    </div>
                    <div class="card-body">
                        @if ($message = Session::get('sukses'))
                            <div class="alert alert-success alert-block" style="text-align: center;">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <table id="datatable1" class="table table-bordered table-striped">
                            <div class="col-lg-6">
                                <div class="btn-group w-100">
                                    <span class="btn btn-sm btn-flat btn-success col fileinput-button" data-toggle="modal" data-target="#tambah">
                                        <i class="fas fa-plus"></i>
                                        <span>Add Produk</span>
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
                            <th>Image</th>
                            <th>Kode Produk</th>
                            <th>Category</th>
                            <th>Nama Produk</th>
                            <th>Merk</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach ($data as $row)
                            <tr>
                                <th scope="row">{{ $i; }}</th>
                                <td>
                                    <img src="{{ asset('post-images/'.$row->image) }}" alt="" style="width: 40px;">
                                </td>
                                <td>{{ $row->kd_produk }}</td>
                                <td>{{ $row->id_category }}</td>
                                <td>{{ $row->nama_produk }}</td>
                                <td>{{ $row->merk }}</td>
                                <td style="text-align: right">{{ $row->harga_jual }}</td>
                                <td style="text-align: right">{{ $row->harga_beli }}</td>
                                <td style="text-align: right">{{ $row->stok }}</td>
                                <td>
                                    <a data-toggle="modal" data-target="#edit" href="/tampilkategori/{{ $row->id_kategori }}" class="btn btn-sm btn-flat btn-primary">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-flat btn-danger hapusproduk" data-id_produk="{{ $row->id_produk }}" data-nama_produk="{{ $row->nama_produk }}">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php $i++;?>
                            @endforeach
                        </tfoot>
                        </table>

                        {{-- MODAL TAMBAH --}}
                        <div id="tambah" class="modal fade" role="dialog">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header" style="background-color: rgb(1, 1, 41)">
                                    <h3 style="color: #fff;">Tambah Produk</h3>
                                    <button type="button" class="close" data-dismiss="modal" style="color: #fff">&times;</button>
                                </div>
                                <form method="post" action="tambahproduk" enctype="multipart/form-data">
                                @csrf
                                    <div class="modal-body">
                                        <div class="card card-default">
                                            <div class="card-header">
                                                <h3 class="card-title">Tambah Produk</h3>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="image" class="form-label">Image</label>
                                                        <img src="" class="img-preview img-fluid mb-3 col-sm-2" alt="">
                                                        <input class="form-control" type="file" name="image" id="image" class="form-control" required autofocus>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Kode Produk</label>
                                                        <input type="text" name="kd_produk" id="kd_produk" class="form-control" required autofocus>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="id_category" class="col-lg-3 col-lg-offset-1 control-label">Kategori</label>
                                                        <select class="form-control select2" id="id_category" name="id_category" style="width: 100%;">
                                                            <option selected="selected">Pilih kategori</option>
                                                            @foreach ($category as $item)
                                                            <option value="{{ $item->nama_kategori }}">{{ $item->nama_kategori }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nama Produk</label>
                                                        <input type="text" name="nama_produk" id="nama_produk" class="form-control" required autofocus>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Merk</label>
                                                        <input type="text" name="merk" id="merk" class="form-control" required autofocus>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Harga Beli</label>
                                                        <input type="text" name="harga_beli" id="harga_beli" class="form-control text-right" type="text" type-currency="IDR" placeholder="Rp" required autofocus>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Harga Jual</label>
                                                        <input type="text" name="harga_jual" id="harga_jual" class="form-control text-right" type="text" type-currency="IDR" placeholder="Rp" required autofocus>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Stok</label>
                                                        <input type="text" name="stok" id="stok" class="form-control text-right" required autofocus>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-sm btn-flat btn-primary tambah">
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
