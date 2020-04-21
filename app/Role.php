<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  protected $fillable = [
      'fa_name', 'en_name',
  ];

  public function user(){
      return $this->belongsToMany(User::class);
  }
  public function permission(){
      return $this->belongsToMany(Permission::class);
  }
}
