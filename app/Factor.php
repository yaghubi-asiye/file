<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factor extends Model
{
  protected $fillable = [
      'user_id', 'sum', 'status',
  ];

  public function user(){
      return $this->belongsTo(User::class);
  }

  public function product(){
      return $this->belongsToMany(Product::class);
  }
}
