<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($role='all')
    {
        $roles = array('admin', 'user', 'guide');

        if($role === 'all'){
            $users = User::all();
        }else{
            $users = User::find($role);
        }
        return view('admin.user', compact('users', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $newImage = time() . '-' . $request->image->getClientOriginalName();

        $request->image->move(public_path('user_images'), $newImage);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->phone = $request->phone;
        $user->image = $newImage;
        $user->role_type = 'admin';
        $user->save();
        $users = User::all();

        return view('admin.user', compact('users'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edited_user = User::find($id);
        return view('admin.edit_user', compact('edited_user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->phone = $request->phone;
        $user->role_type = 'admin';
        $user->save();

        $users = User::all();
        return view('admin.user', compact('users')); 
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
    $user->delete($id);
    $users = User::all();
    return view('admin.user', compact('users'));
    }
}
