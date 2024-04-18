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
        return $this->belongsTo(SalesModel::class);
    }

    public function product(){
        return $this->belongsTo(ProductModel::class);
    }
}
