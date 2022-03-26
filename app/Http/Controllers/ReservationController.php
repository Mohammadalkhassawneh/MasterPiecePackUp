<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller


{
    public function show()
    {
        $reservations = DB::table('product_user')
            ->join('products', 'products.id', '=', 'product_id')
            ->join('users', 'users.id', '=', 'user_id')
            ->where('product_id', '=', Auth::user()->id)

            ->get(['*', 'products.name As product_name', 'product_user.id As reservation_id']);

        // select * from trip_user INNER join trips on (trip_id = trips.id) INNER JOIN users on (trips.guide_id = users.id) where (trips.guide_id = 4);

        return view('publicsite.reservations', compact('reservations'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return  view("admin.reservation", compact('users'));
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

    public function getSeller($id)
    {
        //

        $reservations = DB::table('product_user')
            ->join('products', 'products.id', '=', 'product_id')
            ->join('users', 'users.id', '=', 'seller_id')
            ->where('seller_id', '=', Auth::id())
            ->orderBy('product_user.id', "asc")
            ->paginate(10, ['*', 'products.name As product_name', 'product_user.id As reservation_id']);
        // dd($reservations);
        $seller = User::find($id);
        $seller_product = $seller->product;
        // dd($seller_product);
        return  view("publicSite.reservations", [
            'reservations' => $reservations,
            'seller_product'  => $seller_product,
        ]);
    }
    public function productFilter(Request $request, $id)
    {

        if ($request->product == "All Products") {
            return redirect()->route("sellerReservation", Auth::id());
        } else {
            $reservations =   DB::table('product_user')
                ->join('products', 'products.id', '=', 'product_id')
                ->join('users', 'users.id', '=', 'user_id')
                ->where('products.name', '=', $request->product)
                ->orderBy('product_user.id', "asc")
                ->paginate(10, ['*', 'products.name As product_name', 'product_user.id As reservation_id']);
            $seller = User::find($id);
            $seller_product = $seller->product;
        }
        return  view("publicSite.reservations", compact('reservations', 'seller_product'));
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
        $product = Product::find($request->product_id);
        $product->user()->attach([ //
            [
                'product_id' => $request->product_id,
                'user_id' => Auth::id(),
                'hold_date' => now(),
                'status' => 'Hold'
            ]
        ]);
        return redirect()->route("userprofile.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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