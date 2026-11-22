<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\About;

class AboutController extends Controller
{
    public function index(): View
    {
        $abouts = About::all();
        return view('about', compact('abouts'));
    }
}
