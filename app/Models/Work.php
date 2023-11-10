<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        'artist_id',
        'image',
        'title',
        'note',
        'slug'
    ];


    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }


    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}
