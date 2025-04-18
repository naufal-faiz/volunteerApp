@extends('home.layouts.main')
@section('content')
@include('home.partials.breadcrumb')
    <section id="services" class="services section pt-0 pb-4">
        <div class="container">
            <div class="row gy-4 d-">
                @foreach ($categories as $category)
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative w-100">
                            <i class="bi bi-{{ $category->icon }}"></i>
                            <h4><a href="/categories/{{ $category->slug }}" class="stretched-link">{{ $category->title }}</a>
                            </h4>
                            <p>{{ $category->description }}</p>
                        </div>
                    </div><!-- End Service Item -->
                @endforeach
            </div>
        </div>
    </section>
@endsection
