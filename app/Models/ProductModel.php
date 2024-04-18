<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['name', 'price', 'stock', 'img'];

    public function detailSales(){
        return $this->hasMany(DetailSalesModel::class);
    }
}
