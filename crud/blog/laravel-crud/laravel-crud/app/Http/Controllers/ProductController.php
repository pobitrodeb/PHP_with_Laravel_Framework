<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function add()
    {
        return view('product.index');
    }
    public function manage()
    {
        return view('product.manage');
    }
    public function create(Request $request)
    {
        return view('product.new');
    }
}
