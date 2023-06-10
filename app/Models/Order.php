<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_product',
        'table',
        'amount',
        'payment_method',
    ];

    public function users()
    {
        return $this->belongsTo(User::class,'id_user');
    }

    public function products(){
        return $this->belongsTo(Product::class, 'id_product');
    }
}
