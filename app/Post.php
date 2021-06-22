<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // FILLABLE
    protected $fillable = [
        'title',
        'slug',
        'content',
        'category_id',
    ];

    // RELAZIONE
    public function category() {
        return $this->belongsTo('App\Category');
    }
}
