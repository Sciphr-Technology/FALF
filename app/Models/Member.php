<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Member extends Model implements HasMedia
{
    use HasFactory;
    use SoftDeletes;
    use InteractsWithMedia;

    protected $fillable = ['name', 'role', 'visible_on_website'];

    protected $casts = [
        'visible_on_website' => 'boolean',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('members')
            ->singleFile()
            ->useFallbackUrl('images/anonymous-user.webp')
            ->useFallbackPath(public_path('images/anonymous-user.webp'))
            ->acceptsMimeTypes(['image/*']);
    }

}
