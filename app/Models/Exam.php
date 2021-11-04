<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $table ='exams';
    protected $fillable = [
        'name_ar',
        'name_en',
        'price',
        'type',
        'subject_id',
        'media_id',
    ];
    public function media(){
        return $this->belongsTo(Media::class,'media_id');
    }
    public function subject(){
        return $this->belongsTo(Subject::class,'subject_id');
    }
}
