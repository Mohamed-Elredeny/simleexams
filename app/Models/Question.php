<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table= 'questions';
    protected $fillable = [
        'body',
        'number',
		'media_id',
		'answers',
		'right_answer',
        'question_bank',
		'hint_id',
        'lesson'
    ];
    public function hint(){
        return $this->belongsTo(Hint::class,'hint_id');
    }
    public function media(){
        return $this->belongsTo(Media::class,'media_id');
    }
}
