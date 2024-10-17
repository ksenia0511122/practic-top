<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

       protected $fillable = [
           'product_id',
           'quantity',
           'total_price',
           'user_id',
       ];

    //  определяет массив атрибутов, которые могут быть массово присвоены.
}
