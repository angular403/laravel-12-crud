<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    // Inisialisasi tabel produk
    protected $table = 'produk';

    // Inisialisasi primary key di dalam tabel
    protected $primaryKey = 'id_produk';

    // Inisialisasi data dapat kita isi
    protected $fillable = ['nama_produk', 'harga', 'deskripsi'];

    // Inisialisasi data yang tidak boleh kita isi
    protected $guarded = ['id_produk'];
}
