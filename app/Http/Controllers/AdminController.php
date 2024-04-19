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
use Pdf;
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

    public function allProduct(Request $request){
        $query = $request->input('search');
        if ($query) {
            $products = ProductModel::where('name', 'like', '%' . $query . '%')->get();
        }else{
            $products = ProductModel::all();
        }
        return view('Produk.produk', compact('products'));
    }

    public function createProduct(Request $request){
         $request->validate([
            'name' => 'required',
            'price' => 'required',
            'stock' => 'required'
        ]);

        $barang = ProductModel::create([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

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
        return view('Penjualan.formCreatePenjualan', compact('product'));
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
            'user_id' => auth()->user()->id,
            'sale_date' => $request->sale_date,
            'total_price' => 0
        ]);

        $totalPrice = 0;

        for ($i=0; $i < count($request->product_id); $i++) {
            $product = ProductModel::find($request->product_id[$i]);
            if ($product) {
                $amount = $request->amount[$i];
                $subTotal = $product->price * $amount;
                $totalPrice += $subTotal;

                DetailSalesModel::create([
                    'sale_id' => $sale->id,
                    'product_id' => $product->id,
                    'amount' => $amount,
                    'sub_total' => $subTotal
                ]);

                $product->stock -= $amount;
                $product->save();
            }
        }

        $sale->total_price = $totalPrice;
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

    public function struk($id){
        $struk = DetailSalesModel::where('id', $id)->get();
        $product = ProductModel::all();
        return view('Modal.struk', compact('struk', 'product'));
    }

    public function view_pdf(){
        $mpdf = new \Mpdf\Mpdf();
        $data = DetailSalesModel::find($id);
        $product = ProductModel::all();
        $mpdf->WriteHTML(view('Penjualan.detailPenjualan', compact('data', 'product')));
        $mpdf->Output();
    }
}
