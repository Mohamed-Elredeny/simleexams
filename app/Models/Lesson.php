<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    /*/
    id	title_ar	title_en	description_ar	description_en	media_id	section_id	created_at	updated_at
    */
    protected $table ='lessons';
    protected $fillable = [
        'title_ar',
        'title_en',
        'description_ar',
        'description_en',
        'media_id',
        'section_id'
    ];
    public function media(){
        return $this->belongsTo(Media::class,'media_id');
    }
}
