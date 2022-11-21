<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Produk;

class TransaksiController extends Controller
{
    public function index(Request $request)
    {
        $produk = Produk::all();
        return view('backend.transaksi.index', compact('produk'));
    }
}
