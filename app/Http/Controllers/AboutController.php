<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\Designer;
// use App\Models\Testimonial;
use App\Models\Contact;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        // Fetch blog posts from the database
        $abouts = About::get();
        $about = About::first();
        // $testimonials = Testimonial::all();
        $contacts = Contact::first();
        // $designer = Designer::all();

        return view('about', compact('abouts','about','contacts'));
    }
}
