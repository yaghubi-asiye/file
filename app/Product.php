<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;
// use Laravel\Scout\Searchable;

class Product extends Model
{
  use Rateable;
  // use Searchable;
  protected $fillable = [
      'name', 'producer_id', 'category_id', 'type_id', 'price', 'status', 'special',
      'sales_number', 'discount', 'image', 'file', 'body', 'download_number', 'click_number',
  ];
//======= morph many to one ==============
  public function comments()
  {
      return $this->morphMany('App\Comment',"commentable");
  }

  public function tags()
  {
      return $this->morphToMany(Tag::class,"taggable");
  }
  public function producer(){
      return $this->belongsTo(Producer::class);
  }
  public function category(){
      return $this->belongsTo(Category::class);
  }
  public function type(){
      return $this->belongsTo(Type::class);
  }
  public function basket(){
      return $this->hasMany(Basket::class);
  }
 
  public function factor(){
      return $this->belongsToMany(Factor::class);
  }


  public static function search($data, $products){
    if(sizeof($data) > 0){
      if(array_key_exists('name', $data)){
        $product = $products->where('name','like','%'.$data['name'].'%');
      }
    }
    if(!empty($products)){
      $product = $product->paginate(10);
    }
    // dd($product);
    return $product;
  }
}
