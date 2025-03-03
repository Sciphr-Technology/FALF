<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Review model class.
 *
 * This class represents a review in the application and extends the
 * Model class provided by Laravel for Eloquent ORM functionality.
 *
 * Traits:
 * - HasFactory: Provides factory methods for creating model instances.
 * - SoftDeletes: Adds soft delete functionality to the model.
 *
 * Properties:
 * - $fillable: An array of attributes that are mass assignable.
 * - $casts: An array of attributes that should be cast to native types.
 */
class Review extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'content',
        'rating',
        'visible_on_website',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'visible_on_website' => 'boolean',
    ];
}
