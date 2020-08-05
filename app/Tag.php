<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //route model binding
    public function getRouteKeyName()
    {
        return 'name';
    }

    //a tag belongs to many posts
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
