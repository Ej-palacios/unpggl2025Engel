<?php

namespace App\Http\Controllers;
class homeController extends Controller
{
    function index()
    {
    return view('posts.index');
    }


    function create()
    {
        return view('posts.create');
    }
        function show()
    {
        return view('posts.show');

    }
        function edit()
    {
        return view('posts.edit');
    }
  
}
