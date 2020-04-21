<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{
  protected $fillable = [
      'name',
  ];

  public function product(){
      return $this->hasMany(Product::class);
  }
}
