<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $guarded = [];

    protected $hidden = [
        'updated_at',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'id');
    }

    // public function getIdAttribute()
    // {
    //     return $this->attributes['id'];
    // }
}
