@extends('layouts.index')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Halo, {{auth()->user()->name}}</h1>
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
                <form action="{{route('create-sale')}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama Pelanggan</label>
                            <input type="text" class="form-control" id="" name="name" >
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" class="form-control" id="" name="address" >
                        </div>
                        <div class="form-group">
                            <label for="">Nomor Telepon</label>
                            <input type="" class="form-control" id="" name="no_hp" >
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Penjualan</label>
                            <input type="date" class="form-control" id="" name="sale_date" >
                        </div>

                        <button type="button" class="btn btn-primary" id="addSaleItem">Tambah Produk</button>
                        <div class="form-group" id="saleForm">
                            <label for="">Produk</label>
                            <select name="product_id[]" id="" class="form-control">
                                @foreach ($product as $item)
                                <option value="{{ $item->id }}">{{$item->name}}</option>
                                @endforeach
                            </select>
                            <label for="">Jumlah</label>
                            <input type="number" class="form-control" id="" name="amount[]">
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('sale')}}" class="btn btn-warning">Batal</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('addSaleItem').addEventListener('click', function() {
        var saleForm = document.getElementById('saleForm');
        var newSaleItem = saleForm.cloneNode(true);
        // console.log(newSaleItem);
        saleForm.parentNode.insertBefore(newSaleItem, this);
    });
</script>
@endsection
