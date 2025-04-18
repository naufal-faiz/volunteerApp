@extends('home.layouts.main')
@section('content')
@include('home.partials.breadcrumb')
    <style>
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
        }

        .card img {
            transition: transform 0.4s ease;
        }

        .card:hover img {
            transform: scale(1.05);
        }
    </style>

    <div class="container">
        <div class="row row-cols-4">
            @foreach ($activities as $activity)
                <div class="col mb-4 text">
                    <a href="/opportunities/{{ $activity->slug }}" class="text-dark">
                        <div class="card h-100">
                            <div class="overflow-hidden d-flex align-items-center justify-content-center"
                                style="width: 100%; height: 200px;">
                                <img src="{{ asset('vesperr/assets/img/hero-image.png') }}" alt=""
                                    class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $activity->title }}</h5>
                                <p class="card-text">{{ $activity->location }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
