<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class BlogController extends Controller
{

    // public function index()
    // {
    //     // Fetch blog posts from the database
    //     $posts = Post::get();

    //     return view('blog.bloggrid', compact('posts'));
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$blogposts = Post::all();
        $blog_posts = Post::latest()->paginate(3); // Order blog posts by creation date in descending order
        // $layout = Layout::first();
        // $categories = Category::all(); // Fetch all categories
        // Pass the blog posts to the view for listing
        return view('blog.blog_index', compact('blog_posts'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'description' => 'nullable|string',
        'content' => 'nullable|string',
        'metatitle' => 'nullable|string|max:255',
        'metadescription' => 'nullable|string|max:255',
        'keyword' => 'nullable|string',
    ]);

    // Handle Image Upload
    $imagePath = $request->file('image')->store('blog_images', 'public');

    // Store Post
    $post = Post::create([
        'title' => $request->title,
        'image' => $imagePath,
        'description' => $request->description,
        'content' => $request->content,
        'metatitle' => $request->metatitle,
        'metadescription' => $request->metadescription,
        'keyword' => $request->keyword,
    ]);

    return redirect()->route('blog.index')->with('success', 'Post created successfully.');
}


   /**
 * Display the specified resource.
 *
 * @param  \App\Models\Blog\Post  $post
 * @return \Illuminate\Http\Response
 */

 public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();

        if (!$post) {
            abort(404); // or any other error handling mechanism you prefer
        }

        $previous = Post::where('id', '<', $post->id)->orderBy('id', 'desc')->first();
        $next = Post::where('id', '>', $post->id)->orderBy('id')->first();
        $recentposts = Post::latest()->take(3)->get(); // Latest 3 posts

        return view('blog.blog_detail', compact('post', 'previous', 'next', 'recentposts'));
    }



}
