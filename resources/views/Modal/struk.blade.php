{{-- @extends('layouts.index')

@section('content')

<div class="invoice">
  <div class="invoice-header">
    <h1>Struk Belanja Anda</h1>
  </div>
  <div class="invoice-details">
    <p><strong>Struk Number:</strong> #12345</p>
    <p><strong>Date:</strong> {{ date('F d, Y') }}</p>
  </div>
  <table class="invoice-table">
    <thead>
      <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($struk as $item)
      <tr>
        <td>{{$item->product->name}}</td>
        <td>{{$item->amount}}</td>
        <td>{{$item->product->price}}</td>
        <td>Rp.{{$item->sub_total}}</td>
      </tr>
      
    </tbody>
    <tfoot>
      <tr>
        <td colspan="4" class="invoice-total">Total:</td>
        <td>Rp.{{$item->sub_total}}</td>
      </tr>
      <a href="{{route('export-pdf', $item->id)}}" class="btn btn-primary">export</a>
      @endforeach
    </tfoot>
  </table>
</div>

<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
  }

  .invoice {
    width: 80%;
    margin: 0 auto;
    border: 1px solid #000;
    padding: 20px;
    background-color: #f9f9f9;
  }

  .invoice-header {
    text-align: center;
    margin-bottom: 20px;
  }

  .invoice-header h1 {
    margin: 0;
    color: #333;
  }

  .invoice-details {
    margin-bottom: 20px;
  }

  .invoice-details p {
    margin: 5px 0;
  }

  .invoice-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
  }

  .invoice-table th,
  .invoice-table td {
    border: 1px solid #ddd;
    padding: 8px;
  }

  .invoice-table th {
    background-color: #f2f2f2;
  }

  .invoice-total {
    float: right;
    font-weight: bold;
  }
</style>
@endsection --}}
@extends('layouts.index')

@section('content')

<div class="invoice">
  <div class="invoice-header">
    <h1>Struk Belanja Anda</h1>
  </div>
  <div class="invoice-details">
    <p><strong>Struk Number:</strong> #12345</p>
    <p><strong>Date:</strong> {{ date('F d, Y') }}</p>
  </div>
  <table class="invoice-table">
    <thead>
      <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($struk as $item)
      <tr>
        <td>{{$item->product->name}}</td>
        <td>{{$item->amount}}</td>
        <td>{{$item->product->price}}</td>
        <td>{{$item->sub_total}}</td>
      @endforeach
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="4" class="invoice-total">Total:</td>
        <td>{{$struk->sub_total}}</td>
      </tr>
      <a href="{{route('struk')}}" class="btn btn-primary">export</a>
    </tfoot>
  </table>
</div>

<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
  }

  .invoice {
    width: 80%;
    margin: 0 auto;
    border: 1px solid #000;
    padding: 20px;
    background-color: #f9f9f9;
  }

  .invoice-header {
    text-align: center;
    margin-bottom: 20px;
  }

  .invoice-header h1 {
    margin: 0;
    color: #333;
  }

  .invoice-details {
    margin-bottom: 20px;
  }

  .invoice-details p {
    margin: 5px 0;
  }

  .invoice-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
  }

  .invoice-table th,
  .invoice-table td {
    border: 1px solid #ddd;
    padding: 8px;
  }

  .invoice-table th {
    background-color: #f2f2f2;
  }

  .invoice-total {
    float: right;
    font-weight: bold;
  }
</style>
@endsection
