@extends('layouts.master')
@section('content')
    <h1>Daftar Produk Kami</h1>
    <hr>
    <button type="button" class="btn btn-primary mb-3">Tambah Data</button>
    <div class="card">
        <div class="card-header">
            Daftar Produk
        </div>

        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Asus Rog</td>
                        <td>10</td>
                        <td>Rp 15.000.000</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-warning">Edit</button>
                            <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
           
                </tbody>
            </table>
        </div>
    </div>
@endsection
