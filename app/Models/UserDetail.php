<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'address',
        'phone',
        'avatar',
    ];

    public function getAvatarAttribute($value)
    {
        return $value ? asset('/images/avatars/' . $value) : asset('/images/avatars/default-avatar.png');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
