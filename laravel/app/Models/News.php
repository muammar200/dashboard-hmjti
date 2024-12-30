<?php

namespace App\Models;

use App\Observers\NewsObserver;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;

#[ObservedBy(NewsObserver::class)]
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
