<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class Student extends Authenticatable
{
    use Notifiable, HasRoles;

    protected $guard_name = 'student';

    protected $fillable = [
        'first_name', 'last_name', 'user_name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        // Student-specific initialization code
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_student');
    }

    public function requests(){
        return $this->hasOne(RequestHistory::class);
    }
}
