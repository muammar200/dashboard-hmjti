<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
