<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'content',
        'rating',
        'visible_on_website',
    ];

    protected $casts = [
        'visible_on_website' => 'boolean',
    ];
}
