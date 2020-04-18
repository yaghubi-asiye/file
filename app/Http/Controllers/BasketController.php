<?php

namespace App\Http\Controllers;

use App\Basket;
use App\Product;
use App\Slider;
use App\Category;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $categories = Category::where('chId', 0)->get();
      $bests = Product::orderBy('salesـnumber', 'desc')->get();
      $specials = Product::where('special', 1)->get();
      $newests = Product::orderBy('created_at', 'desc')->get();
      $baskets = Basket::where('user_id',auth()->user()->id)->where('status', '0')->get();
      $sum = 0;
      if(count($baskets) > 0){
        foreach ($baskets as $key => $basket) {
          $sum += $basket->price * $basket->count;

        }
      }
      return view('basket.index',compact('categories', 'bests', 'specials', 'newests', 'baskets', 'sum'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      return response()->json(['basket_create'=>'success','count'=>1]);
      // dd($request->ajax());
      if($request->ajax()){
        $id=$request->input('id');
        // dd($id);
        $product = Product::find($id);
        if(Basket::where([
          ['user_id','=',auth()->user()->id],
          ['product_id','=',$product->id],
          ['status','=','0']])
          ->get()->count() == 0){
            if($product->count > 0){
              Basket::create([
                'user_id'=>auth()->user()->id,
                'product_id'=>$product->id,
                'price'=>$product->price,
              ]);
              $count = count(Basket::where('user_id','=',auth()->user()->id)->where('status','=','0')->get());
              return response()->json(['basket_create'=>'success','count'=>$count]);
            }
          }
          else{
            return response()->json(['count'=>'exceeded']);
          }

          }

      }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function show(Basket $basket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function edit(Basket $basket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Basket $basket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Basket $basket)
    {
        //
    }
}
