<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
  protected $fillable = [
    'title', 'url', 'image', 'sliderparent_id',
  ];

  public function sliderparent(){
    return $this->belongsTo(Sliderparent::class);
  }
}
