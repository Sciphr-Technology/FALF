<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Remark model class.
 *
 * This class represents a remark in the application and extends the
 * Model class provided by Laravel for Eloquent ORM functionality.
 *
 * Traits:
 * - HasFactory: Provides factory methods for creating model instances.
 * - SoftDeletes: Adds soft delete functionality to the model.
 *
 * Properties:
 * - $fillable: An array of attributes that are mass assignable.
 *
 * Methods:
 * - remarkable(): Defines a polymorphic relationship.
 * - user(): Defines a belongs-to relationship with the User model.
 */
class Remark extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content',
        'user_id',
    ];

    /**
     * Get the parent remarkable model (morph to).
     *
     * @return MorphTo
     */
    public function remarkable(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * Get the user that owns the remark.
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
