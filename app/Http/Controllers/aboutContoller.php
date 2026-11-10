<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class aboutContoller extends Controller
{
    public function index()
    {
        $about = About::all();
        return view('portfolio.about', compact('about'));
    }
}
