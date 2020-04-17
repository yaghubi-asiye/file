<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sliderparent extends Model
{
  protected $fillable = [
    'fa_name', 'en_name',
  ];

  public function slider(){
    return $this->hasMany(Slider::class);
  }
}
