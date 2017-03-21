<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = array('ISBN','title','type','author_name','publisher','description');



    //getter
    //setter

    public function getTitleAttribute($value)
    {
        return strtoupper($value);
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->diffForHumans();
    }
}
