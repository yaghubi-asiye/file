<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  protected $fillable = [
      'user_id', 'demo', 'file_id',
  ];
  public function user(){
    return $this->belongsTo(User::class);
  }

  public function file(){
    return $this->belongsTo(File::class);
  }
}
