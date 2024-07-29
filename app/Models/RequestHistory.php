<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
class RequestHistory extends Model
{
    use HasFactory;
    protected $table = 'request_histories';
    protected $fillable = ['student_id', 'status', 'first_name', 'last_name', 'address', 'email', 'date_of_birth', 'phone', 'city', 'country', 'gender' ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
