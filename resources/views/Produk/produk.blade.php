@extends('layouts.index')
@section('content')
<section class="content">
    @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
    @if (session('successUpdateProduk'))
        <div class="alert alert-success">
            {{session('successUpdateProduk')}}
        </div>
    @endif
    @if(session('successDelete'))
    <div class="alert alert-danger">
        {{session('successDelete')}}
    </div>
    @endif
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <a href="{{route('tambah-produk')}}" class="btn btn-success">Tambah Produk</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">No</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Image</th>
                                    <th style="width: 115px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $item)
                                <tr>
                                    <th>{{$loop->iteration}}</th>
                                    <th>{{$item->name}}</th>
                                    <th>{{$item->price}}</th>
                                    <th>{{$item->stock}}</th>
                                    <th>{{$item->img}}</th>
                                    <th>
                                        <a href="{{route('edit-product', $item->id)}}" class="btn btn-primary" ><i class="nav-icon fas fa-pen"></i></a>
                                        <form action="{{route('delete-product', $item->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger" type="submit"><i class="nav-icon fas fa-trash"></i></button>
                                        </form>
                                    </th>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

</div>
</div>
</div>
</div>
</section>
@endsection
