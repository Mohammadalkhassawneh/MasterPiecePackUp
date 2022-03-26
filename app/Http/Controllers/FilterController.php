<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class FilterController extends Controller
{


    public function roles(Request $request)
    {

        if ($request->user == "All Users") { //
            $users = User::all();
        } else {
            $users = User::where('role_type', $request->user)->get();
        }
        return view("admin.user", compact('users'));
    }

    public function search(Request $request)
    {


        $cats = Category::all();
        $trips = Product::where('name', 'Like', '%' . $request->search . '%')->paginate(500);
        return view('publicSite.trips-list', compact('trips', 'cats'));
    }
}