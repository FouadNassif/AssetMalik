<?php

namespace App\Models;

use App\Models\Items;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FavoriteItems extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'items_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function item()
    {
        return $this->belongsTo(Items::class);
    }
}
