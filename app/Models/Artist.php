<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nickname',
        'birth_date',
        'gender',
        'photo',
        'biography',
        'nationality',
        'based',
        'phone',
        'business_email',
        'instagram',
        'facebook',
        'linkedin',
        'slug'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function works()
    {
        return $this->hasMany(Work::class);
    }
}
