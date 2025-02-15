@extends('layout.app')

@section('content')
    <div class="container">
        <h2 class="my-4">Our Services</h2>
        <div class="row">
            @foreach($services as $service)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ $service->hero }}" class="card-img-top" alt="{{ $service->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $service->title }}</h5>
                            <p class="card-text">{{ Str::limit($service->description, 100) }}</p>
                            <a href="{{ route('service.show', $service->slug) }}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $services->links() }} <!-- Pagination links -->
    </div>
@endsection
