<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table ='subjects';
    protected $fillable = [
            'title_ar',
            'title_en',
            'description_ar',
            'description_en',
            'rate',
            'price',
            'tag_id',
            'media_id',
    ];
    public function media(){
        return $this->belongsTo(Media::class,'media_id');
    }
    public function sections(){
        return $this->hasMany(Section::class,'subject_id');
    }
    public function exams(){
        return $this->hasMany(Exam::class,'subject_id');
    }
    public function students(){
        return $this->hasMany(UserSubject::class,'subject_id');
    }
}
