<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Producer;
use Illuminate\Http\Request;

class ProducerController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $producers = Producer::latest()->paginate(10);
      return view('admin.producer.index', compact('producers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.producer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // dd($request->all());
      $this->validate(request(),[
        'name'=>'required',
        // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
      $producer = Producer::create([
        'name'=>$request['name'],
      ]);
      return redirect(route('producer.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producer  $producer
     * @return \Illuminate\Http\Response
     */
    public function show(Producer $producer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producer  $producer
     * @return \Illuminate\Http\Response
     */
    public function edit(Producer $producer)
    {
      return view('admin.producer.edit', compact('producer'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producer  $producer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producer $producer)
    {
      $data = $request->all();
      $producer->update($data);
      return redirect(route('producer.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producer  $producer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producer $producer)
    {
      $producer->delete();
      return redirect(route('producer.index'));
    }
}
