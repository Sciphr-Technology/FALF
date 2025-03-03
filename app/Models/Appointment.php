<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Appointment model class.
 *
 * This class represents an appointment in the application and extends the
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
class Appointment extends Model
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
        'phone',
        'appointment_date',
        'appointment_time',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'appointment_date' => 'date',
        'appointment_time' => 'datetime',
    ];

    /**
     * Get all the remarks for the appointment.
     *
     * This method defines a polymorphic one-to-many relationship
     * between the Appointment model and the Remark model.
     *
     * @return MorphMany
     */
    public function remarks(): MorphMany
    {
        return $this->morphMany(Remark::class, 'remarkable');
    }
}
