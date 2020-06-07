<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function answers() {
        return $this->hasMany('App\Answer');
    }
}
