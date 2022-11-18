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
            <a href="daftarkategori" class="nav-link">
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
                        <h3 class="card-title">Edit Category</h3>
                    </div>
                    <form method="post" action="/updatekategori/{{ $data->id_kategori }}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h3 class="card-title">edit Category</h3>
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
                                            <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" value="{{ $data->nama_kategori }}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-sm btn-flat btn-primary">
                                    <i class="fa fa-save"></i> Simpan
                                </button>
                                <a href="/daftarkategori" class="btn btn-sm btn-flat btn-danger">
                                    <i class="fa fa-arrow-circle-left"></i> Back
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection


