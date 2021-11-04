<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSubject extends Model
{
    protected $fillable = [
        'subject_id', 
        'user_id', 
        'rate',
        'rate_message',
        'exams',
    ];
    public function student(){
        return $this->belongsTo(Student::class,'user_id');
    }
}
