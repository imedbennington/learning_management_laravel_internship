<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'image', 'category_id', 'uploader_id', 'uploader_type',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function uploader()
    {
        return $this->morphTo();
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'course_student');
    }
}

