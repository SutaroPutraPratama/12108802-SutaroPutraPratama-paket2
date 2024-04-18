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
          </tr>
      </thead>
      <tbody>
        <tr>
            <th>{{$salesDetail->sale_id}}</th>
            <th>{{$salesDetail->product->name}}</th>
            <th>{{$salesDetail->amount}}</th>
            <th>{{$salesDetail->sub_total}}</th>
        </tr>
      </tbody>
  </table>
  </section>
@endsection
