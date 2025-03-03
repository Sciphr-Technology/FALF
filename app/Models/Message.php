<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Message model class.
 *
 * This class represents a message in the application and extends the
 * Model class provided by Laravel for Eloquent ORM functionality.
 *
 * Traits:
 * - HasFactory: Provides factory methods for creating model instances.
 * - SoftDeletes: Adds soft delete functionality to the model.
 *
 * Properties:
 * - $fillable: An array of attributes that are mass assignable.
 */
class Message extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'phone', 'message'];

    /**
     * Get all the remarks for the message.
     *
     * This method defines a polymorphic one-to-many relationship
     * between the Message model and the Remark model.
     *
     * @return MorphMany
     */
    public function remarks(): MorphMany
    {
        return $this->morphMany(Remark::class, 'remarkable');
    }
}
