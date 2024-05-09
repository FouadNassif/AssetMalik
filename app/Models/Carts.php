<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'item_id',
        'totalPrice',
        'quantity'
    ];

    public function user()
    {
        return $this->belongsToMany(User::class, 'carts_user', 'cart_id', 'user_id');
    }


    public function item()
    {
        return $this->belongsToMany(Items::class);
    }
}
