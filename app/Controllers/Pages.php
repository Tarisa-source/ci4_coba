<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        // echo "Hello world";
        return view('pages/home');
    }
    public function about()
    {
        echo "Hello world";
        return view('pages/about');
    }
   
}
