@extends('layouts.index')
@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif
<section class="content">
    <div class="" style="display: flex;">
        <a href="{{route('form-create-sale')}}" class="btn btn-primary">Create Penjualan</a>
        <form action="{{route('export-excel')}}" method="post" style="margin-left:10px;">
            @csrf
            <button type="submit" class="btn btn-primary">Export</button>
        </form>
    </div>
    <table class="table table-bordered">
      <thead>
          <tr>
              <th style="width: 10px">No</th>
              <th>Sale Date</th>
              <th>Total Price</th>
              <th>Employee</th>
              <th>Customer</th>
              <th>Lihat Detail</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($sales as $sale)
          <tr>
              <th>{{$loop->iteration}}</th>
              <th>{{$sale->sale_date}}</th>
              <th>{{$sale->total_price}}</th>
              <th>{{$sale->user->name}}</th>
              <th>{{$sale->customer->name}}</th>
              <th><a href="{{route('detail-penjualan', $sale->id)}}" class="btn btn-primary">DETAIL</a></th>
          </tr>
          @endforeach
      </tbody>
  </table>
  </section>
@endsection
