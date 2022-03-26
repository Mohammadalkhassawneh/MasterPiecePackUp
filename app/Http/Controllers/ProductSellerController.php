<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductSellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view("publicSite.add_trip", compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'size' => 'required',
            'price' => 'required',
            'category_id' => 'required'
        ]);
        //
        // $trip = new Trip();
        $request['guide_id'] = Auth::id();
        $input = $request->all();
        if ($request->file("image")) {
            $newImageName = time() . '-' . $request->image->getClientOriginalName();
            $request->image->move(public_path('sellerproducts'), $newImageName);
            $input['image'] = $newImageName;
        }
        Product::create($input);
        return redirect()->route("userprofile.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guide = User::findOrFail($id);
        $products = $guide->product;
        return view("publicSite.seller_profile", compact('guide', 'products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view("publicSite.edit_product", compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $sell)
    {

        $request->validate([
            'name' => 'required',
            'size' => 'required',
            'price' => 'required',
            'date' => 'required',
            'category_id' => 'required'
        ]);

        $request['seller_id'] = Auth::id();

        $input = $request->all();

        if ($request->file("image")) {
            $newImageName = time() . '-' . $request->image->getClientOriginalName();
            $request->image->move(public_path('sellerProducts'), $newImageName);
            $input['image'] = $newImageName;
        }

        $sell->update($input);
        return redirect()->route("userprofile.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $sell)
    {
        $sell->delete();
        return redirect()->route("userprofile.index");
    }
}