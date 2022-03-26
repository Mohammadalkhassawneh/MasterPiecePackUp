<?php


namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function contact()
    {
        return view('publicSite.contact');
    }

    public function categories()
    {
        $category = Category::all();
        return view('publicSite.categories', compact('category'));
    }

    public function homeCategories()
    {
        $category = Category::orderBy('id', 'DESC')->limit(3)->get();
        $product = Product::all();
        $news = Product::orderBy('id', 'DESC')->limit(3)->get();


        return view('publicSite.index', compact('category', 'product', 'news'));
    }

    public function index()
    {
        $category = Category::all();
        return view('admin.category', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/categoryCreate');
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
            'category_name' => 'required',
            'category_img' => 'required',
        ]);

        $input = $request->all();
        if ($request->file("category_img")) {
            $newImageName = time() . '-' . $request->category_img->getClientOriginalName();
            $request->category_img->move(public_path('uploads'), $newImageName);
            $input['category_img'] = $newImageName;
        }
        Category::create($input);

        return redirect()->route('categories.index');
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
    public function edit(Category $Category)
    {
        return view('admin/categoryUpdate', compact('Category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $Category)
    {
        $request->validate([
            'category_name' => 'required',
        ]);

        $input = $request->all();
        if ($request->file("category_img")) {
            $newImageName = time() . '-' . $request->category_img->getClientOriginalName();
            $request->category_img->move(public_path('uploads'), $newImageName);
            $input['category_img'] = $newImageName;
        }
        $Category->update($input);

        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $Category)
    {

        $Category->delete();
        return back(); //<============
    }
    public function createReservation()
    {
    }
}