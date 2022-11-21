<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Category;
use App\Models\Transaksi;
use Session;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
        $category = Category::distinct()->orderBy('nama_kategori','asc')->get('nama_kategori');
        $data = Produk::with('category')->get();
        return view('backend.produk.daftarproduk', compact('data', 'category'));
    }
    public function edit(Produk $produk){
        return view('backend.produk.daftarproduk');
    }
    public function tambahproduk(Request $request){
        $data = Produk::create($request->all());
        if($request->hasFile('image'))
        {
            $request->file('image')->move('post-images/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        // $produk = DB::table('produks')->select(DB::raw('MAX(RIGHT(kd_produk,4)) as kode'));
        // $kd="";
        // if($produk->count()>0)
        // {
        //     foreach($produk->get() as $k)
        //     {
        //         $tmp = ((int)$k->kode)+1;
        //         $kd = sprintf("%04s", $tmp);
        //     }
        // }
        // else
        // {
        //     $kd = "00001";
        // }
        // dd($kd);

        Session::flash('sukses','Data berhasil di tambahkan');

        return redirect()->route('daftarproduk', compact('data'));
    }
    public function tampilproduk($id_produk)
    {
        $data = Produk::find($id_produk);
        return view('backend.produk.daftarproduk', compact('data'));
    }
    public function updateproduk(Request $request, $id_produk)
    {
        $data = Produk::find($id_produk);
        $data->update($request->all());
        Session::flash('sukses','Data berhasil di edit');

        return redirect()->route('daftarproduk');
    }
    public function hapusproduk($id_produk)
    {
        $data = Produk::find($id_produk);
        $data->delete();
        Session::flash('sukses','Data berhasil di hapus');

        return redirect()->route('daftarproduk');
    }
}
