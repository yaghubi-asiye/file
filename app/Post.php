<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title','description','image','user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
