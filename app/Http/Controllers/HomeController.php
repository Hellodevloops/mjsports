<?php

namespace App\Http\Controllers;
use App\Models\Home;
use App\Models\Category;
// use App\Models\Essential;
// use App\Models\Company;
use App\Models\Banner;
use App\Models\Post;
use App\Models\Testimonial;
use App\Models\About;
use App\Models\Team;
use App\Models\Contact;
use App\Models\Batch;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
       // Fetch blog posts from the database
       $home = Home::all();

       // Fetch essentials data
    //    $essentials = Essential::all();
    //    $companys = Company::all();
       $testimonials = Testimonial::all();
       $blog_posts = Post::latest()->paginate(6);
       $about = About::first();
       $banners = Banner::all();

       $contacts = Contact::first();
    //    $team = Team::all();
    //    $batch = Batch::all();


    // //   // Fetch data for EssentialController
    // $essentialController = new EssentialController();
    // $essentials = $essentialController->index();


    //    $hom = Home::all();
    //    dd($homes->category->categoryname);
    //    $about = About::first();
    //    $banner = banner::all();

       return view('home', compact('home','testimonials','blog_posts','about','banners','contacts'));
    }
}
