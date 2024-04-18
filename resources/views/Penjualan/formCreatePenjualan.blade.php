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
                            <label for="">Nama Petugas</label>
                            <select name="user_id" class="form-control">
                                @foreach ($user as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Penjualan</label>
                            <input type="date" class="form-control" id="" name="sale_date" >
                        </div>

                        <div class="form-group">
                            <label for="">Produk</label>
                            <select name="product_id" id="" class="form-control">
                                @foreach ($product as $item)
                                <option value="{{ $item->id }}">{{$item->name}}</option>
                                @endforeach
                            </select>
                            <label for="">Jumlah</label>
                            <input type="number" class="form-control" id="" name="amount">
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

@endsection
