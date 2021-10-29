<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Instructor extends Authenticatable
{
    use Notifiable;
    protected $guard = 'instructor';

    protected $fillable = [
        'name', 'email', 'password', 'image', 'media_id', 'degree', 'subjects'
    ];

    public function media(){
        return $this->belongsTo(Media::class,'media_id');
    }

    public function subject(){
        return $this->hasMany(Subject::class,'media_id');
    }
}
