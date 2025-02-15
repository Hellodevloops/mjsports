@extends('layout.app')

@section('content')
 <!-- Blog Section Start -->
 <div class="blog-section mt-50 mb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h2>OUR BLOGS</h2>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">

            <!-- Blog Item -->
            @foreach($blog_posts as $post)
            <div class="col-lg-4 col-md-6 col-12 mb-40">
                <div class="rossi-blog">
                    <a href="{{ route('blog.show', $post->slug) }}" class="image">
                        <img width="370" height="290" src="{{ asset($post->image) }}" alt="{{ $post->title }}">
                    </a>
                    <div class="content">
                        <h4><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h4>
                        <ul class="meta">
                            <li><a href="#">Admin</a></li>
                            <li><a href="#">{{ $post->created_at->format('d F, Y') }}</a></li>
                            <li><a href="#">Comments 05</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach


            <!-- Blog Item -->
            {{-- <div class="col-lg-4 col-md-6 col-12 mb-40">
                <div class="rossi-blog">
                    <a href="blog-details.html" class="image"><img width="370" height="290" src="assets/images/blog/blog-13.avif"
                            alt="Blog Image"></a>
                    <div class="content">
                        <h4><a href="blog-details.html">Tennis Icons: The Greatest Players of All Time</a></h4>
                        <ul class="meta">
                            <li><a href="#">Momen</a></li>
                            <li><a href="#">30 January, 2025</a></li>
                            <li><a href="#">Comments 05</a></li>
                        </ul>
                    </div>
                </div>
            </div> --}}


        </div>

        <!-- Pagination -->
        <div class="row">
            <div class="col">

                <ul class="pagination">
                    <li><a href="#"><i class="fa fa-angle-left"></i>Back</a></li>
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li> - - - - - </li>
                    <li><a href="#">18</a></li>
                    <li><a href="#">18</a></li>
                    <li><a href="#">20</a></li>
                    <li><a href="#">Next<i class="fa fa-angle-right"></i></a></li>
                </ul>

            </div>
        </div>

    </div>
</div><!-- Blog Section End -->
@endsection
