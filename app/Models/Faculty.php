<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function student_subjects(Type $var = null): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Student_subject::class,'department_id','id');
    }
}
