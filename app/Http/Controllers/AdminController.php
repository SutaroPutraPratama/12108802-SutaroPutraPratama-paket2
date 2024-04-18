<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminController extends Controller
{
    public function createUser(Request $request){
        $validate = $request->validate([
            'email' => 'required',
            'name' => 'required',
            'password' => 'required'
        ]);

        $data = $request->except('confirm-password', 'password');
        $data['password'] = Hash::make(request()->input('password'));
        User::create($data);
        return redirect('user')->with('success', 'Berhasil menambah user');
    }

    public function allUser(){
        $user = User::all();
        return view('User.user', compact('user'));
    }

    public function allProduct(){
        $products = ProductModel::all();
        return view('Produk.produk', compact('products'));
    }
}
