<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
  protected $fillable = [
      'fa_name', 'en_name',
  ];

  public function role(){
      return $this->belongsToMany(Role::class);
  }
}
