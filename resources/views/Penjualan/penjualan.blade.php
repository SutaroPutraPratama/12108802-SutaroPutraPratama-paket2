@extends('layouts.index')
@section('content')
<section class="content">
    <a href="{{route('tambah-penjualan')}}" class="btn btn-primary">Create Penjualan</a>
    <table class="table table-bordered">
      <thead>
          <tr>
              <th style="width: 10px">No</th>
              <th>Nama Pelanggan</th>
              <th>Tanggal</th>
              <th>Total Harga</th>
              <th>Lihat Detail</th>
          </tr>
      </thead>
      <tbody> 
          <tr> 
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th><a href="" class="btn btn-primary">DETAIL</a></th>
              {{-- {{route('detail-penjualan', ['id' => $item->id])}} --}}
          </tr>
      </tbody>
  </table>
  </section>
@endsection