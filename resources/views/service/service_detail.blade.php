@extends('layout.app')

@section('content')
    <div class="container">
        <h2 class="my-4">{{ $service->title }}</h2>
        <p>Published on {{ $service->created_at->format('F j, Y') }}</p>
        <img src="{{ $service->hero }}" class="img-fluid mb-4" alt="{{ $service->title }}">
        <div class="content">
            {!! $service->body !!}
        </div>
        <div class="mt-4">
            @if($previous)
                <a href="{{ route('service.show', $previous->slug) }}" class="btn btn-primary">Previous</a>
            @endif
            @if($next)
                <a href="{{ route('service.show', $next->slug) }}" class="btn btn-primary">Next</a>
            @endif
        </div>
        <div class="mt-4">
            <h4>Recent Services</h4>
            <ul>
                @foreach($recentservices as $recent)
                    <li><a href="{{ route('service.show', $recent->slug) }}">{{ $recent->title }}</a></li>
                @endforeach
            </ul>
        </div>
        <a href="{{ route('service.index') }}" class="btn btn-secondary mt-4">Back to Services</a>
    </div>
@endsection
