<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Category;
use Session;

class ProdukController extends Controller
{
    public function index(Request $request){
        $category = Category::distinct()->orderBy('nama_kategori','asc')->get('nama_kategori');
        $data = Produk::with('category')->get();
        return view('backend.produk.daftarproduk', compact('data', 'category'));
    }
    public function edit(Produk $produk){
        return view('backend.produk.daftarproduk');
    }
    public function tambahproduk(Request $request){
        // dd($request);
        Produk::create($request->all());
        Session::flash('sukses','Data berhasil di tambahkan');

        return redirect()->route('daftarproduk');
    }
    public function tampilproduk($id_produk){
        $data = Produk::find($id_produk);
        return view('backend.produk.daftarproduk', compact('data'));
    }
    public function updateproduk(Request $request, $id_produk){
        $data = Produk::find($id_produk);
        $data->update($request->all());
        Session::flash('sukses','Data berhasil di edit');

        return redirect()->route('daftarproduk');
    }
    public function hapusproduk($id_produk){
        $data = Produk::find($id_produk);
        $data->delete();
        Session::flash('sukses','Data berhasil di hapus');

        return redirect()->route('daftarproduk');
    }
}
