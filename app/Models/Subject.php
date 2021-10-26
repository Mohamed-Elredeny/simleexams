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
            'tag_id',
            'media_id',
            'media_id'
    ];
}
