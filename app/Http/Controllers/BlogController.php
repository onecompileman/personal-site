<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct() 
    {
         $this->middleware('auth');
    }

    public function create() 
    {
        return view('pages.admin.create-blog');
    }
}
