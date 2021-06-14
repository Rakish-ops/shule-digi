<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
     protected $primaryKey = 'student_id';  

       public $incrementing = false;
    
    protected $keyType = 'string';

    protected $fillable = [
        'student_id',
        'student_name',
        'date_of_birth',
        'family_id',
        'class_id',
        'home_address',
        'medical_notes',
    ];
}
