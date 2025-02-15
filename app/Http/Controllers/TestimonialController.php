<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
       // Fetch blog posts from the database

       $testimonials = Testimonial::all();
    //    $hom = Home::all();
    //    dd($homes->category->categoryname);
    //    $about = About::first();
    //    $designer = Designer::all();

       return view('home', compact('testimonials'));
    }
}
