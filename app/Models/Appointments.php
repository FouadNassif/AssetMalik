<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appointments extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phoneNumber',
        'date',
        'time',
        'message',
        'status',
    ];

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

