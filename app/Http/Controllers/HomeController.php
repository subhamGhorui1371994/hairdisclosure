<?php

use Illuminate\Http\Request;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Models\Products;
class HomeController extends Controller
{
    public function __construct()
    {
        $products = DB::table('products')->pluck('title','id');
        View::share('products', $products);
    }
    public function index()
    {
        $time_slots = [
            '10:00 AM - 12:00 PM',
            '12:00 PM - 02:00 PM',
            '02:00 PM - 06:00 PM',
            '06:00 PM - 08:00 PM'
        ];
        $allProducts = Products::all()->toArray();
        return view('pages.home',compact('allProducts','time_slots'));
    }
}
