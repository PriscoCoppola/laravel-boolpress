<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // RELAZIONE
    public function posts() {
        return $this->hasMany('App\Post');
    }
}
