<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesModel extends Model
{
    use HasFactory;
    protected $table = 'sales';
    protected $fillable = ['sale_date', 'total_price', 'customer_id', 'user_id'];

    public function customer(){
        return $this->belongsTo(CustomerModel::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
