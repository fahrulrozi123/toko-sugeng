<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Category extends Model
{
    use HasFactory;
    protected $table = "categories";
    protected $primaryKey = "id_kategori";
    protected $fillable = ["id_kategori", "nama_kategori"];

    public function produk(){
        return $this->hasMany('App\Models/Produk', 'id_kategori');
    }
}
