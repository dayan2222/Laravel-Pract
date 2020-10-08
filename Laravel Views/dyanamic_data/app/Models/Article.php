<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function path()
    {
        # code...
        return route('articles.show',$this);
    }

    // ############## Using Same Model Name ###############
    // public function user()
    // {
    //     # code...
    //     return $this->belongsTo(User::class);
    //     // App\Models\Article::find(1)->user; <- Find in Tiner
    // }

    //  ############## Using Conceptual Naming #############
    public function author()
    {
        # code...
        return $this->belongsTo(User::class, 'user_id');   # Overriding the foreign Key 
    }

    public function tags()
    {
        # code...
        return $this->belongsToMany(Tag::class);
    }
}
