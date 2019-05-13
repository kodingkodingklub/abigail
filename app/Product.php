<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'kode_produk', 'nama_produk', 'size', 'harga', 'stok', 'gambar',
    ];
}
