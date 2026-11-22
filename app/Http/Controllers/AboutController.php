<?php

namespace App\Http\Controllers;

use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        return view('about', compact('abouts'));
    } 
}