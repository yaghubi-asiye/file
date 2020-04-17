<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Role;
use App\Permission;
use Illuminate\Http\Request;

class RoleController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $roles = Role::latest()->paginate(10);
      return view('admin.role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $permissions = Permission::latest()->get();
      return view('admin.role.create',compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // return $request->all();die;
      $this->validate(request(),[
        'fa_name'=>'required',
        'en_name'=>'required',
      ]);
      $role = Role::create([
        'fa_name'=>$request['fa_name'],
        'en_name'=>$request['en_name'],
      ]);

      // $role->permissions()->attach(request('permission_id'));
      $role->permission()->sync($request->input('permission_id'));
      return redirect(route('role.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
      $role_permissions = Role::find($role->id)->permission()->get();
      $permissions = Permission::latest()->get();
      return view('admin.role.edit', compact('role', 'permissions','role_permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
      // return $request->all();die;
      $data = $request->all();
      $role->update($data);
      $role->permission()->sync($request->input('permission_id'));
      return redirect(route('role.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
      $role->delete();
      return redirect(route('role.index'));
    }
}
