<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
  protected $fillable = [
      'fa_name', 'en_name',
  ];

  public function user(){
      return $this->hasMany(User::class);
  }
}
