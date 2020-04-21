<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Sliderparent;
use Illuminate\Http\Request;

class SliderparentController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $parents = Sliderparent::latest()->paginate(10);
      return view('admin.sliderparent.index', compact('parents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliderparent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate(request(),[
        'fa_name'=>'required',
        'en_name'=>'required',
        // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
      $parent = Sliderparent::create([
        'fa_name'=>$request['fa_name'],
        'en_name'=>$request['en_name'],
      ]);
      return redirect(route('sliderparent.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sliderparent  $sliderParent
     * @return \Illuminate\Http\Response
     */
    public function show(SliderParent $sliderparent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sliderparent  $sliderparent
     * @return \Illuminate\Http\Response
     */
    public function edit(sliderparent $sliderparent)
    {
        return view('admin.sliderparent.edit', compact('sliderparent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sliderparent  $sliderparent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sliderparent $sliderparent)
    {
      $data = $request->all();
      $sliderparent->update($data);
      return redirect(route('sliderparent.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sliderparent  $sliderparent
     * @return \Illuminate\Http\Response
     */
    public function destroy(sliderparent $sliderparent)
    {
      // dd($sliderparent->all());
      $sliderparent->delete();
      return redirect(route('sliderparent.index'));
    }
}
