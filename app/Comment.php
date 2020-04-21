<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
      'commentable_id', 'commentable_type', 'user_id', 'comment', 'status',
    ];
    //======= morph many to one ==============
    public function commentable()
    {
        return $this->morphTo();
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
