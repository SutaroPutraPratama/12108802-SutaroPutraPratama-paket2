@extends('layouts.index')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Form Penjualan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="">Beranda</a></li>
                </ol>
            </div>
        </div>
    </div>
</section>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-primary">
                <form action="" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama Pelanggan</label>
                            <input type="" class="form-control" id="" name="NamaPelanggan" >
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="" class="form-control" id="" name="Alamat" >
                        </div>
                        <div class="form-group">
                            <label for="">Nomor Telepon</label>
                            <input type="" class="form-control" id="" name="NomorTelepon" >
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Penjualan</label>
                            <input type="date" class="form-control" id="" name="TanggalPenjualan" >
                        </div>
                        
                        <div class="form-group">
                            <button type="button" class="btn btn-primary addProduk">Tambah Produk</button>
                            <label for="">Produk</label>
                            <select name="produk_id" id="" class="form-control">
                                <option value=""></option>
                            </select>
                            <label for="">Jumlah</label>
                            <input type="number" class="form-control" id="" name="JumlahProduk">
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('penjualan')}}" class="btn btn-warning">Batal</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection