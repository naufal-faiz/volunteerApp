@extends('home.layouts.main')
@section('content')
    <div class="container">
                <div class="row">
                    @foreach ($activities as $activity)
                        <div class="col-lg-4 mb-4 text">
                            <a href="/categories/{{ $activity->slug }}" class="text-dark">
                                <div class="card h-100">
                                    <img src="{{ asset('vesperr/assets/img/hero-image.png') }}"
                                    alt="" class="card-img-top ">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $activity->title }}</h5>
                                        <p class="card-text">{{ $activity->location }}</p>
                                        <a href="" class="btn btn-outline-success btn-sm">Read More</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
    </div>
@endsection
