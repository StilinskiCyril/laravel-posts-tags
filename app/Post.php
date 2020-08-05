<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //a post belongs to many tags
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
