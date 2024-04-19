{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
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
</head>
<body>
  <div class="invoice">
    <div class="invoice-header">
      <h1>Struk Belanja Anda</h1>
    </div>
    <div class="invoice-details">
      <p><strong>Struk Number:</strong> #55555</p>
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
        <tr>
          <td>{{$data->product->name}}</td>
          <td>{{$data->amount}}</td>
          <td>{{$data->product->price}}</td>
          <td>Rp.{{$data->sub_total}}</td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="4" class="invoice-total">Total:</td>
          <td>Rp.{{$data->sub_total}}</td>
        </tr>
        <a href="{{route('export-pdf', $data->id)}}" class="btn btn-primary">export</a>
      </tfoot>
    </table>
  </div>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
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
</head>
<body>
  
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
        <tr>
          <td>Pasta Gigi</td>
          <td>2</td>
          <td>2000</td>
          <td>4000</td>
        </tr>
        <tr>
          <td>Sikat Gigi</td>
          <td>1</td>
          <td>5000</td>
          <td>10000</td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="4" class="invoice-total">Total:</td>
          <td>Rp.14000</td>
        </tr>
        {{-- <a href="{{route('export-pdf')}}" class="btn btn-primary">export</a> --}}
      </tfoot>
    </table>
  </div>
</body>
</html>
