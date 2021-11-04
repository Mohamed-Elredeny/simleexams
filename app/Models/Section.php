<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table ='sections';
    protected $fillable = [
        'name_ar',
        'name_en',
        'description_en',
        'description_ar',
        'subject_id'
    ];
    
    public function subject(){
        return $this->belongsTo(Subject::class,'subject_id');
    }

    public function questions(){
        return $this->hasMany(Question::class,'section');
    }
}
