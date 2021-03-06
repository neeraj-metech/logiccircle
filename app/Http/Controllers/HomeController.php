<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return Product::find(1)->user;
        // return user::find(4)->product;
        $products = Product::all();
        return view('home')->with(["products"=>$products]);
    }
    public function productusers(Request $request){
        $id = $request->id;
        $users = Product::find($id)->user->toArray();
        return view('productusers')->with(["users"=>$users]);
    }
}
