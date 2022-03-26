<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


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

        return view('admin.user', compact('users'));
    }
    public function getSeller($id)
    {
        $user = User::find($id);
        $products = Product::where('product_id', $id)->get();
        return view('publicSite/seller_profile', compact('user', 'products'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::where('role_type', $id)->get();
        return view("admin.user", compact('users'));
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

        $input = $request->all();
        if ($request->file("image")) {
            $newImageName = time() . '-' . $request->image->getClientOriginalName();
            $request->image->move(public_path('user_images'), $newImageName);
            $input['image'] = $newImageName;
        }
        $input['role_type'] = 'admin';
        User::create($input);
        return redirect()->route("user.index");
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($user)
    {
        $edited_user = User::find($user);
        return view('admin.edit_user', compact('edited_user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $input = $request->all();
        if ($request->file("image")) {
            $newImageName = time() . '-' . $request->image->getClientOriginalName();
            $request->image->move(public_path('user_images'), $newImageName);
            $input['image'] = $newImageName;
        }
        $input['role_type'] = "admin";
        $user->update($input);
        return redirect()->route("user.index");
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
        return redirect()->route("user.index");
    }
}