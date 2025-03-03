<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * Member model class.
 *
 * This class represents a member in the application and extends the
 * Model class provided by Laravel for Eloquent ORM functionality.
 *
 * Traits:
 * - HasFactory: Provides factory methods for creating model instances.
 * - SoftDeletes: Adds soft delete functionality to the model.
 * - InteractsWithMedia: Adds media library functionality to the model.
 *
 * Properties:
 * - $fillable: An array of attributes that are mass assignable.
 * - $casts: An array of attributes that should be cast to native types.
 *
 * Methods:
 * - registerMediaCollections(): Registers media collections for the model.
 */
class Member extends Model implements HasMedia
{
    use HasFactory;
    use SoftDeletes;
    use InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'role', 'visible_on_website'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'visible_on_website' => 'boolean',
    ];

    /**
     * Register the media collections for the model.
     *
     * @return void
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('members')
            ->singleFile()
            ->useFallbackUrl('images/anonymous-user.webp')
            ->useFallbackPath(public_path('images/anonymous-user.webp'))
            ->acceptsMimeTypes(['image/*']);
    }
}
