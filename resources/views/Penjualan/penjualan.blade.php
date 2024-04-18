@extends('layouts.index')
@section('content')
<section class="content">
    <a href="{{route('form-create-sale')}}" class="btn btn-primary">Create Penjualan</a>
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
          <tr>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th><a href="" class="btn btn-primary">DETAIL</a></th>
          </tr>
      </tbody>
  </table>
  </section>
@endsection
