<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produk;
use App\Models\Category;

class Produk extends Model
{
    use HasFactory;
    protected $table = "produks";
    protected $primaryKey = "id_produk";
    protected $guarded = [];

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
}
