<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Produk;
use DB;

class DashboardController extends Controller
{
    public function index(){
        $category = Category::count();
        $produk = Produk::count();

        return view('backend.dashboard', compact('category', 'produk'));
    }
}
