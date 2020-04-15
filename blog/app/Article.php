<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;
    
    protected $table = 'articles';
    protected $fillable = ['title', 'description'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
}
