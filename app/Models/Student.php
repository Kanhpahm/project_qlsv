<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'avatar',
        'email',
        'phone',
        'address',
        'sex',
        'birthday',
    ];
    public function student_subjects()
    {
        return $this->hasMany(Student_subject::class,'student_id','id');
    }
}
