<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Session;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $data = Category::all();
        return view('backend.kategori.daftarkategori', compact('data'));
    }
    public function tambahdata(Request $request)
    {
        $data = $request->validate([
            'nama_kategori' => 'required'
        ]);

        $data = Category::create($request->all());
        Session::flash('sukses','Data berhasil di tambahkan');

        return redirect()->route('daftarkategori');
    }
    public function tampilkategori($id_kategori)
    {
        $data = Category::find($id_kategori);
        return view('backend.kategori.daftarkategori', compact('data', 'category'));
    }
    public function updatekategori(Request $request, $id_kategori)
    {
        $data = Category::find($id_kategori);
        $data->update($request->all());
        Session::flash('sukses','Data berhasil di edit');

        return redirect()->route('daftarkategori');
    }
    public function hapuskategori($id_kategori)
    {
        $data = Category::find($id_kategori);
        $data->delete();
        Session::flash('sukses','Data berhasil di hapus');

        return redirect()->route('daftarkategori');
    }
}
