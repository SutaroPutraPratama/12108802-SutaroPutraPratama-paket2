@extends('layouts.index')
@section('content')
<section class="content">
    <table class="table table-bordered">
      <thead>
          <tr>
              <th>Penjualan</th>
              <th>Produk</th>
              <th>amount</th>
              <th>SubTotal</th>
              <th>Eksport</th>
          </tr>
      </thead>
      <tbody>
        <tr>
            <th>{{$salesDetail->sale_id}}</th>
            <th>{{$salesDetail->product->name}}</th>
            <th>{{$salesDetail->amount}}</th>
            <th>{{$salesDetail->sub_total}}</th>
            <th>
                <a href="{{route('export-pdf', $salesDetail->id)}}" style="btn btn-primary">export</a>
            </th>
        </tr>
      </tbody>
  </table>
  </section>
  {{-- <section class="content-header">
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
                <h1>Barang</h1>
            </div>
        </div>
    </div>
</div> --}}
@endsection
