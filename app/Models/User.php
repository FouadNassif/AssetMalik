<?php

namespace App\Models;

use App\Models\Appointments;
use App\Models\FavoriteItems;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Authenticatable implements AuthenticatableContract
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phoneNumber',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function appointments(): HasMany
    {
        return $this->hasMany(Appointments::class);
    }

    public function favoriteItems()
    {
        return $this->hasMany(FavoriteItems::class);
    }
}
