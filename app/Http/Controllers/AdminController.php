<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Exports\salesExport;
use App\Models\ProductModel;
use App\Models\SalesModel;
use App\Models\CustomerModel;
use App\Models\DetailSalesModel;
use App\Http\Controllers\importExcelCSV;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{

    public function exportExcelCSV()
    {
        return Excel::download(new salesExport, 'sales.xlsx');
    }

    public function createUser(Request $request){
        $validate = $request->validate([
            'email' => 'required',
            'name' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        $data = $request->except('confirm-password', 'password');
        $data['password'] = Hash::make(request()->input('password'));
        User::create($data);
        return redirect('user')->with('success', 'Berhasil menambah user');
    }

    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();
        return redirect('user')->with('success', 'Berhasil Menghapus user');
    }

    public function allUser(){
        $user = User::all();
        return view('User.user', compact('user'));
    }

    public function allProduct(){
        $products = ProductModel::all();
        return view('Produk.produk', compact('products'));
    }

    public function createProduct(Request $request){
         $request->validate([
            'name' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'img' => 'required|mimes:png,jpg,jpeg'
        ]);

        if ($request->has('img')) {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;
            $path = 'uploads/image';
            $file->move($path, $extension);
        };

        $barang = ProductModel::create([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'img' => $request->img
        ]);
        $barang->update(['image' => $filename]);

        return redirect('product')->with('success', 'berhasil');
    }

    public function editProduct($id){
        $product = ProductModel::find($id);
        return view('Produk.formEditProduk', compact('product'));
    }

    public function updateProduct(Request $request, $id){
        $product = ProductModel::findOrFail($id);
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'img' => $request->img
        ]);

        $updateDataProduk = ProductModel::where('id', $product->id)->first();
        if($updateDataProduk){
            return redirect()->route('product')->with('successUpdateProduk', 'Berhasil Update Produk');
        } else{
            return back()->with('failedUpdateProduk', 'Failed Update Produk');
        }
    }

    public function deleteProduct($id){
        $product = ProductModel::find($id);
        $product->delete();
        return redirect('product')->with('success', 'Produk berhasil dihapus');
    }

    public function allSaleData(){
        $sales = SalesModel::all();
        return view('Penjualan.penjualan', compact('sales'));
    }

    public function formCreateSale(){
        $product = ProductModel::all();
        $user = User::all();
        return view('Penjualan.formCreatePenjualan', compact('product', 'user'));
    }

    public function sales(Request $request){

        $customer = CustomerModel::create([
            'name' => $request->name,
            'address' => $request->address,
            'no_hp' => $request->no_hp
        ]);

        $user = User::find($request->user_id);
        $sale = SalesModel::create([
            'customer_id' => $customer->id,
            'user_id' => $request->user_id,
            'sale_date' => $request->sale_date,
            'total_price' =>0
        ]);

        $product = ProductModel::find($request->product_id);
        $detailSale = DetailSalesModel::create([
            'sale_id' => $sale->id,
            'product_id' => $request->product_id,
            'amount' => $request->amount,
            'sub_total' => $product->price * $request->amount
        ]);

        $sale->total_price = $detailSale->sub_total;
        $sale->save();

        if($detailSale){
            return redirect('sales')->with('success', 'Berhasil Menambah Penjualan Baru');
        }
        return back()->with('error', 'Gagal');
    }

    public function detailPenjualan($id){
        $salesDetail = DetailSalesModel::find($id);
        $product = ProductModel::all();
        return view('Penjualan.detailPenjualan', compact('salesDetail', 'product'));
    }
}
