<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Slider;
use App\Sliderparent;
use Illuminate\Http\Request;

class SliderController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $parents = Sliderparent::get();
      $sliders = Slider::latest()->paginate(10);
      return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $parents = Sliderparent::get();
      return view('admin.slider.create', compact('parents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // return $request->all();
      $file = $request['image'];
      $image = $this->ImageUploader($file,'uploads/');

      $this->validate(request(),[
        'title'=>'required',
        'url'=>'required',
        // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
      $slider = Slider::create([
        'title'=>$request['title'],
        'url'=>$request['url'],
        'sliderparent_id'=>$request['sliderparent_id'],
        'image'=>$image,
      ]);
      return redirect(route('slider.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
      $parents = Sliderparent::get();
        return view('admin.slider.edit', compact('slider','parents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        if($request['image']){
          $file = $request['image'];
          $image = $this->ImageUploader($file,'uploads/');
        }else{
          $image = $slider->image;
        }
        $data = $request->all();
        $data['image'] = $image;
        $slider->update($data);
        return redirect(route('slider.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
      unlink($slider->image);
      $slider->delete();
      return redirect(route('slider.index'));
    }
}
