<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $category = Category::orderBy('id', 'DESC')->limit(6)->get();
        $product = Product::all(); //
        $news = Product::orderBy('id', 'DESC')->limit(6)->get();
        if (Auth::user() != null) {
            $role = User::find(Auth::user()->id);
        } else {
            $role = "";
        }
        return view('publicSite.index', compact('category', 'product', 'news', 'role'));
    }


    public function show($id)
    {
        $user = User::find($id);
        return view('publicSite.index', compact('user'));
    }
    public function handleAdmin()
    {
        return redirect('/admin');
    }
}