<?php

namespace App\Models;

use App\Models\FavoriteItems;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Items extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
    ];

    public function favoriteByUsers()
    {
        return $this->hasMany(FavoriteItems::class);
    }
}
