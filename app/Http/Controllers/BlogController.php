<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index()
    {
        return view('pages.blog');
    }
    public function blogDetail()
    {
        return view('pages.blog-detail');
    }
}
