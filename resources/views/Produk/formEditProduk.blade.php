@extends('layouts.index')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Form Produk</h1>
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
                    @method('patch')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama Produk</label>
                            <input type="" class="form-control" id="" name="NamaProduk" value="">
                        </div>
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="" class="form-control" id="" name="Harga" value="">
                        </div>
                        <div class="form-group">
                            <label for="">Stok</label>
                            <input type="" class="form-control" id="" name="Stok" value="">
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('produk')}}" class="btn btn-warning">Batal</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection