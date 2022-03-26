<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;

class ProductController extends Controller
{
    //

    public function index()
    {
        $sellers = User::where('role_type', 'seller')->get();
        return view("publicSite.sellers", compact('sellers'));
    }

    public function getSeller($id)
    {
        $user = User::find($id);
        $seller_products = $user->product; //sol:2

        // dd($seller_products);
        return view('publicSite/seller_profile', compact('user', 'seller_products'));
    }
}