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
                <form action="{{route('update-product', $product->id)}}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="" class="form-control" id="" name="name" value="{{$product->name}}">
                        </div>
                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="" class="form-control" id="" name="price" value="{{$product->price}}">
                        </div>
                        <div class="form-group">
                            <label for="">Stok</label>
                            <input type="" class="form-control" id="" name="stock" value="{{$product->stock}}">
                        </div>
                        <div class="form-group">
                            <label for="">Img</label>
                            <input type="file" class="form-control" id="" name="img" value="{{$product->img}}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('product')}}" class="btn btn-warning">Batal</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
