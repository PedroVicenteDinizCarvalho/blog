<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    	'title', 'slug', 'body', 'image', 'published', 'author_id',
    ];

    public function authors()
    {
    	return $this->belongsToMany(User::class);
    }
}
