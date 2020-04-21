<?php

namespace App\Http\Controllers\admin;

use App\Filter;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $filters = Filter::paginate(20);
      return view('admin.filter.index', compact('filters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        $filters = Filter::where('parent_id', 0)->get();
        // dd($filters);
        return view('admin.filter.create', compact('categories', 'filters'));
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
      $category_id = $request->get('category_id');
      $parent_id = $request->get('parent_id');
      $names = $request->get('name');
      $en_names = $request->get('en_name');
      $types = $request->get('type');
      if(is_array($names)){
        foreach ($names as $key => $value) {
          if(!array_key_exists($key,$en_names)){
            $en_name='-';
          }else{
            $en_name=$en_names[$key];
          }
          if(!array_key_exists($key,$types)){
            $type=1;
          }else{
            $type=$types[$key];
          }
          Filter::create([
            'category_id'=>$category_id,
            'name'=>$value,
            'en_name'=>$en_name,
            'type'=>$type,
            'parent_id'=>$parent_id
          ]);
        }
      }
      return redirect(route('filter.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Filter  $filter
     * @return \Illuminate\Http\Response
     */
    public function show(Filter $filter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Filter  $filter
     * @return \Illuminate\Http\Response
     */
    public function edit(Filter $filter)
    {
      $filters = Filter::where('parent_id', 0)->get();
      $categories = Category::all();
      return view('admin.filter.edit', compact('filter','categories', 'filters'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Filter  $filter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Filter $filter)
    {

      $data = $request->all();
      // dd($data);
      $filter->update($data);
      return redirect(route('filter.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Filter  $filter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filter $filter)
    {
      $filter->delete();

      return redirect(route('filter.index'));
    }
}
