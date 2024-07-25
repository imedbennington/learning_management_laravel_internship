<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class Instructor extends Authenticatable
{
    use Notifiable, HasRoles;

    protected $guard_name = 'instructor';

    protected $fillable = [
        'first_name', 'last_name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        // Instructor-specific initialization code
    }

    public function courses()
    {
        return $this->morphMany(Course::class, 'uploader');
    }
}
