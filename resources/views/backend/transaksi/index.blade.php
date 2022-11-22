@extends('backend.template')

@section('transaksi')
    <li class="nav-item">
        <a href="transaksi" class="nav-link active">
            <i class="nav-icon fas fa-edit"></i>
            <p>
                Transaksi
            </p>
        </a>
    </li>
@endsection
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                        <h1 class="m-0">Daftar Transaksi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">KERANJANG</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="">
            <div class="row">
                @foreach ($produk as $row)
                    <div class="col-lg-2">
                        <div class="card" style="width: 13rem;">
                            <div class="card-body">
                                <div class="card" style="width: 10rem;">
                                    <img src="{{ asset('post-images/'.$row->image) }}" class="card-img-top" alt="..." style="width: 160px; height: 100px;">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>{{ $row->nama_produk }}</b></h5>
                                        <p class="card-text">{{ $row->harga_jual }}</p>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-block btn-outline-primary btn-sm">
                                    <i class="fa fa-save"></i> Pilih
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

