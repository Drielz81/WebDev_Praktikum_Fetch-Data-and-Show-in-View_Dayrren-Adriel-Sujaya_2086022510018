<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Blog;

class blogController extends Controller
{
    public function index(): View
    {
        $blogs = Blog::all();
        return view('blog', compact('blogs'));
    }
}
