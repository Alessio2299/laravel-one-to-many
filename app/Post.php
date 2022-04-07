<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'url', 'description', 'slug'];

    public function categories(){
        return $this->hasMany('App\Category');
    }
}
