<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseModel extends Model
{
    use  HasFactory;
    protected $table = 'courses';
    protected $fillable = [
        'name',
        'description',
        'fee',
        'max_student',
        'total_duration_in_days',
        
    ];
}
