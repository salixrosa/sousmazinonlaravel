<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Display the latest blog posts.
     *
     * @return Response
     */
    public function index()
    {
        return view('blog');
    }
}