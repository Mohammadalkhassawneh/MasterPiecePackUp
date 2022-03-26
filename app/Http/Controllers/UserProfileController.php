<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::id()) {
            if (Auth::user()->role_type == "seller") {
                $products = User::find(Auth::id())->product;

                return view('publicSite/user_profile', compact('products'));
            } else if (Auth::user()->role_type == "user") {
                // dd("ss");
                $user         = User::findOrfail(Auth::id());
                $reservations  = $user->reservation;
                // dd($reservations);
                return view('publicSite/user_profile', compact('reservations'));
            } else if (Auth::user()->role_type == "admin") {
                return redirect('/admin');
            }
        }
        return redirect()->route("home2");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view('publicSite/edit_user_profile', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $userprofile)
    {

        $request->validate([
            'name' => 'required ',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
        ]);

        $input = $request->all();
        if ($request->file("image")) {
            $newImageName = time() . '-' . $request->image->getClientOriginalName();
            $request->image->move(public_path('user_images'), $newImageName);
            $input['image'] = $newImageName;
        }
        $userprofile->update($input);
        return redirect()->route("userprofile.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}