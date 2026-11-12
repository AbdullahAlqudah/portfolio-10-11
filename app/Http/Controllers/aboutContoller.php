<?php
namespace App\Http\Controllers;

use App\Models\About;
use App\Models\User;

class aboutContoller extends Controller
{
    public function index()
    {
        $about = About::all();

        $user = User::with('profile')->first();

        return view('portfolio.about', compact('about', 'user'));
    }
}
