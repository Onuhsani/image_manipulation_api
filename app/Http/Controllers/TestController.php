<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('test');
        
    }

    public function data()
    {
        //dd('hear');
        return redirect()->back()->with('warning', "I hope it works");
    }
}
