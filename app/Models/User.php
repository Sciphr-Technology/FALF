<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * User model class.
 *
 * This class represents a user in the application and extends the
 * Authenticatable class provided by Laravel for authentication purposes.
 *
 * Traits:
 * - HasFactory: Provides factory methods for creating model instances.
 * - Notifiable: Allows the user to receive notifications.
 *
 * Properties:
 * - $fillable: An array of attributes that are mass assignable.
 * - $hidden: An array of attributes that should be hidden for arrays.
 *
 * Methods:
 * - casts(): Defines the attribute type casting.
 */
class User extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @return array
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
