<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SalesModel;
use App\Models\ProductModel;

class DetailSalesModel extends Model
{
    use HasFactory;
    protected $table = 'detail_sales';
    protected $fillable = ['sale_id', 'product_id', 'amount', 'sub_total'];

    public function sale(){
        return $this->hasMany(SalesModel::class, 'id', 'sale_id');
    }

    public function product(){
        return $this->hasMany(ProductModel::class, 'id', 'product_id');
    }
}
