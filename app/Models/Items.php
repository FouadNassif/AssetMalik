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
        'category_id',
    ];

    public function favoriteByUsers()
    {
        return $this->hasMany(FavoriteItems::class);
    }
    public function reviews()
    {
        return $this->hasMany(Reviews::class);
    }

    // Items.php (Model)
    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
}
