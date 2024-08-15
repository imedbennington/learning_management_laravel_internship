<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Hash;
class Instructor extends Authenticatable
{
    use Notifiable, HasRoles;
    protected $table = 'instructor';
    protected $guard_name = 'instructor';

    protected $fillable = [
        'first_name', 'user_name', 'last_name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    public function getNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        // Instructor-specific initialization code
    }
    public function hasRole($role)
    {
        // Assuming roles are stored in a 'roles' table and related to the user
        return $this->roles()->contains('name', $role);
    }
    public function courses()
    {
        return $this->morphMany(Course::class, 'uploader');
    }
}
