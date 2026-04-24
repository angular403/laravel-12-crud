<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'andrew jaya abadi',
            'alamat' => 'jakarta',
            'tipe' => 'Ruko'
        ];
        return view('pages.produk',$data);
    }

    public function tambahProduk(){
        return view('pages.addProduk');
    }
}
