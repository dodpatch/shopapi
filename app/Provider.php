<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;
class Provider extends Model
{
    protected $fillable = ['name', 'tel', 'email', 'address'];

    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
