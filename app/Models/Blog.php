<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table ='blogs';
    protected $fillable = [
            'title_ar',
            'title_en',
            'description_ar',
            'description_en',
            'buplisher', 
            'image'
    ];

}
