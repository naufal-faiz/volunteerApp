@extends('home.layouts.main')
@section('content')
    @include('home.partials.nav-route')
    <section id="services" class="services section">
        <div class="container">
            <div class="row gy-4 d-">
                @foreach ($activities as $activity)
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative w-100">
                            <i class="bi bi-activity"></i>
                            <h4><a href="/categories/{{ $activity->slug }}" class="stretched-link">{{ $activity->title }}</a>
                            </h4>
                            <p>{{ $activity->description }}</p>
                        </div>
                    </div><!-- End Service Item -->
                @endforeach
            </div>
        </div>
    </section>
@endsection
