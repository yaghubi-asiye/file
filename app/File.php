<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
  protected $fillable = [
      'name', 'file',
  ];

  public function article(){
      return $this->hasMany(Article::class);
  }
}
