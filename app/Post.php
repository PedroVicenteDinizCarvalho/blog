<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    	'title', 'slug', 'body', 'image', 'published', 'user_id',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
