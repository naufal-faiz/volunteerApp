@extends('home.layouts.main')
@section('content')
    @include('home.partials.breadcrumb')

    <section id="service-details" class="service-details section pt-0">
        <div class="container">
            <div class="row gy-4">

                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                    <div class="overflow-hidden d-flex align-items-center justify-content-center w-100"
                        style="height: 350px;">
                        <a href="{{ asset('vesperr/assets/img/hero-image.png') }}" data-gallery="portfolio-gallery-app"
                            class="glightbox preview-link w-100">
                            <img src="{{ asset('vesperr/assets/img/team/team-3.jpg') }}" alt=""
                                class="img-fluid w-100">
                        </a>
                    </div>
                    <p>{!! $activity->description !!}</p>
                </div>

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
                        <a href="#" class="btn btn-primary border border-none w-100"
                            style="background-color: #33A1E1">Jadi
                            Relawan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection