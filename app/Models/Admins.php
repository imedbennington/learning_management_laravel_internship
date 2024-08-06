<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Hash;
class Admins extends Authenticatable
{
    use Notifiable, HasRoles;
    protected $table = 'admins';
    protected $guard_name = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password',
    ];
    public function getNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function setPasswordAttribute($value)
{
    if (!empty($value)) {
        \Log::info('Setting password for admin: ' . $value);
        $this->attributes['password'] = Hash::make($value);
    }
}

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        // Admin-specific initialization code
    }
    public function courses()
    {
        return $this->morphMany(Course::class, 'uploader');
    }
}