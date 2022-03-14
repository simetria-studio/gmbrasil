<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'adress_id',
        'orderitens_id',
        'boleto',
        'payment_type',
        'reference',
        'order_code',
        'total',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function adress()
    {
        return $this->hasOne(Adress::class, 'id', 'adress_id');
    }

}
