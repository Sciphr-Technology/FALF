<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Appointment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'appointment_date',
        'appointment_time',
    ];

    protected $casts = [
        'appointment_date' => 'date',
        'appointment_time' => 'datetime',
    ];

    public function getFormattedDateAttribute(): string
    {
        return $this->appointment_date->locale('ar')->format('D, d F Y');
    }

    public function getFormattedTimeAttribute(): string
    {
        return $this->appointment_time->format('h:i A');
    }

    public function scopeForDate($query, $date)
    {
        if ($date instanceof Carbon) {
            return $query->whereDate('appointment_date', $date);
        }

        return $query->whereDate('appointment_date', Carbon::parse($date));
    }

    public function scopeUpcoming($query)
    {
        return $query->where('appointment_date', '>=', today())
            ->orderBy('appointment_date')
            ->orderBy('appointment_time');
    }
}
