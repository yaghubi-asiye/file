<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
  protected $fillable = [
      'user_id', 'product_id', 'price', 'status',
  ];

  public function user(){
    return $this->belongsTo(User::class);
  }

  public function product(){
    return $this->belongsTo(Product::class);
  }
}
