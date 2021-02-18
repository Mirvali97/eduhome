<?php

namespace App\Models;

use CyrildeWit\EloquentViewable\InteractsWithViews;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{

    protected $table = 'post';

    public function user(){
        return $this->belongsTo(User::class);
    }
}
