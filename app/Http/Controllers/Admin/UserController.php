<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $users = User::all();

    return view('user.index', ["users" => $users]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  { 
    $roles = Role::all()->toArray();
    $list_roles = [];
    $index_roles = array_map(function($item){ return $item["id"] = $item["display_name"]; }, $roles);
    $value_roles = array_map(function($item){ return $item["display_name"]; }, $roles);
    $list_roles = array_combine($index_roles, $value_roles);
    
    return view('user.create',['list_roles'=>$list_roles]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $user = User::create([
      'name' => $request->get('name'),
      'email' => $request->get('email'),
      'password' => bcrypt($request->get('password'))
    ]);

    $user->attachRole($request->get('role'));

    return redirect('admin/users');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $user = User::find($id);
    $role = $user->roles;

    return view('user.show', ["user" => $user, "role"=>$role]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $user = User::find($id);
    $role = $user->roles;

    $roles = Role::all();
    $list_roles = [];
    foreach ($roles as $key => $value)
    {
        $list_roles[$value->id] = $value->display_name;
    }

    return view('user.edit', ["user" => $user, "list_roles" => $list_roles, 'role' => $role]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $user = User::find($id);

    $user->roles()->detach();
    $user->attachRole($request->get('role'));

    $user->name = $request->get('name');
    $user->email = $request->get('email');
    $user->save();

    return redirect('admin/users');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $user = User::find($id);
      $user->delete();

      return redirect('admin/users');
  }
}
