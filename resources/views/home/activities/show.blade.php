@extends('home.layouts.main')
@section('content')
@include('home.partials.nav-route')

    <section id="service-details" class="service-details section">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="border p-4">
                        <h4 class="mb-3">{{ $activity->title }}</h4>
                        <div class="d-inline">
                            @foreach ($activity->categories as $category)
                                <p class="btn btn-outline-success my-1"><small>{{ $category->title }}</small></p>
                            @endforeach
                        </div>
                        <p class="p-0 m-0 mt-4"><strong>Tanggal Kegiatan</strong></p>
                        <p>{{ $activity->time }}</p>
                        <p class="p-0 m-0"><strong>Lokasi</strong></p>
                        <p>{{ $activity->location }}</p>
                        <a href="#" class="btn btn-primary border border-none w-100" style="background-color: #33A1E1">Jadi
                            Relawan</a>
                    </div>
                </div>

                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                    <a href="{{ asset('vesperr/assets/img/hero-image.png') }}" title="App 1"
                        data-gallery="portfolio-gallery-app" class="glightbox preview-link"><img
                            src="{{ asset('vesperr/assets/img/hero-image.png') }}" alt=""
                            class="img-fluid services-img">
                    </a>
                    <p>{!! $activity->description !!}</p>
                </div>
            </div>
        </div>
    </section><!-- /Service Details Section -->
@endsection
