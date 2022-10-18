<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function add()
    {
        return view('front.course-add');
    }
//    public function manage()
//    {
//        return view('front.course-manage');
//    }
}
