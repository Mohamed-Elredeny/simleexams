<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table ='sections';
    protected $fillable = [
        'name_ar',
        'name_en',
        'subject_id'
    ];
    public function subject(){
        return $this->belongsTo(Subject::class,'subject_id');
    }
}
