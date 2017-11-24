<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\FullContent;

class BlogController extends Controller
{
    /**
     * Display the latest blog posts.
     * A call to index gets the default, which is to say (currently)
     * the top 10 most recent full contents, displayed in 
     * @return Response
     */
    public function index()
    {
        $fullContent = FullContent::where('active', true)->orderBy('created_at', 'desc')->get();

        return view('blog', ['fullContent' => $fullContent]);
    }
}