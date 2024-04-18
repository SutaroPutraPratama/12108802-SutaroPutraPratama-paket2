@extends('layouts.index')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Form User</h1>
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
                <form action="{{route('create-user')}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">email</label>
                            <input type="email" class="form-control" id="" name="email">
                        </div>
                        <div class="form-group">
                            <label for="">name</label>
                            <input type="" class="form-control" id="" name="name">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" id="" name="password">
                        </div>
                        <div class="form-group">
                            <label for="">Role</label>
                            <select name="role" id="" class="form-control">
                                <option value="admin">Admin</option>
                                <option value="employee">employee</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="" class="btn btn-warning">Batal</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
