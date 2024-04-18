@extends('layouts.index')
@section('content')
<a href="{{route('tambah-user')}}" class="btn btn-primary">add User</a>
<section class="content">
  <table class="table table-bordered">
    <thead>
        <tr>
            <th style="width: 10px">No</th>
            <th>Email</th>
            <th>name</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach ($user as $item)
            <th>{{$loop->iteration}}</th>
            <th>{{$item->email}}</th>
            <th>{{$item->name}}</th>
            <th>{{$item->role}}</th>
            @endforeach
        </tr>
    </tbody>
</table>
</section>
@endsection
