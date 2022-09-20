<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function __construct()
    {
                $products = DB::table('products')->pluck('title','id');
        View::share('products', $products);
    }
    public function index()
    {
        return view('pages.shopping-cart');
    }
}
