<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function users()
    {
        return $this->belongsTo(User::class,'id_users');
    }

    public function products(){
        return $this->belongsTo(product::class, 'id_products');
    }
}