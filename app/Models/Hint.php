<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hint extends Model
{
    protected $table ='hints';
    protected $fillable = [
        'description',
        'media_id'
    ];
    public function media(){
        return $this->belongsTo(Media::class,'media_id');
    }
}
