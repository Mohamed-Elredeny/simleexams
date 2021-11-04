<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExamQuestion extends Model
{
    protected $table ='exam_questions';
    protected $fillable = [
        'exam_id',
        'question_id'
    ];
    public function exam(){
        return $this->belongsTo(Exam::class,'exam_id');
    }
    public function question(){
        return $this->belongsTo(Question::class,'question_id');
    }
}
