@extends('layout.app')

@section('content')
<div class="blog-section mt-50 mb-50">
    <div class="container">
        <div class="row row-40">
            <div class="col-xl-9 col-lg-8 col-12 order-1 order-lg-2">
                <div class="row">
                    <div class="col-12 mb-50">
                        <div class="rossi-single-blog">
                            <div class="image">
                                <img width="770" height="386" src="{{ asset($post->image) }}" alt="{{ $post->title }}">
                            </div>
                            <div class="content">
                                <h3>{{ $post->title }}</h3>
                                <ul class="meta">
                                    <li><a href="#">{{ $post->author->name ?? 'Unknown' }}</a></li>
                                    <li><a href="#">{{ $post->created_at->format('d F, Y') }}</a></li>
                                    <li><a href="#">Comments {{ $post->comments_count ?? 0 }}</a></li>
                                </ul>
                                <p>{!! nl2br(e($post->content)) !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Section -->
            <div class="col-xl-3 col-lg-4 col-12 order-2 order-lg-1">
                <div class="blog-sidebar mb-40">
                    <h2 class="block-title">RECENT POSTS</h2>

                    @foreach($recentposts as $recent)
                    <div class="sidebar-blog">
                        <a href="{{ route('blog.show', $recent->slug) }}" class="image">
                            <img width="70" height="70" src="{{ asset($recent->image) }}" alt="{{ $recent->title }}">
                        </a>
                        <div class="content">
                            <h5><a href="{{ route('blog.show', $recent->slug) }}">{{ $recent->title }}</a></h5>
                            <span>{{ $recent->created_at->format('d F Y') }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- End Sidebar Section -->
        </div>
    </div>
</div>
@endsection
