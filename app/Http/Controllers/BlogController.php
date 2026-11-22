<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('number', 'asc')->get();

        return view('blog', compact('blogs'));
    }
}