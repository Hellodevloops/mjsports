<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        // Fetch blog posts from the database
        $banners = Banner::all();


        return view('home', compact('banners'));
    }
}
