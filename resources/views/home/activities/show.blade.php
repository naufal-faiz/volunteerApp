@extends('home.layouts.main')
@section('content')
    <section id="service-details" class="service-details section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="services-list">
                        <a href="#" class="active">Web Design</a>
                        <a href="#">Software Development</a>
                        <a href="#">Product Management</a>
                        <a href="#">Graphic Design</a>
                        <a href="#">Marketing</a>
                    </div>

                    <h4>{{ $activity->title }}</h4>
                    @foreach ($activity->categories as $category)
                    <div class="btn btn-outline-success">
                        {{ $category->title }}
                    </div>
                @endforeach
                </div>

                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('vesperr/assets/img/hero-image.png') }}" alt="" class="img-fluid services-img">
                    <p>{!! $activity->description !!}</p>
                   
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Aut eum totam accusantium voluptatem.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Assumenda et porro nisi nihil nesciunt
                                voluptatibus.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
                    </ul>
                    <p>
                        Est reprehenderit voluptatem necessitatibus asperiores neque sed ea illo. Deleniti quam sequi optio
                        iste veniam repellat odit. Aut pariatur itaque nesciunt fuga.
                    </p>
                    <p>
                        Sunt rem odit accusantium omnis perspiciatis officia. Laboriosam aut consequuntur recusandae
                        mollitia doloremque est architecto cupiditate ullam. Quia est ut occaecati fuga. Distinctio ex
                        repellendus eveniet velit sint quia sapiente cumque. Et ipsa perferendis ut nihil. Laboriosam vel
                        voluptates tenetur nostrum. Eaque iusto cupiditate et totam et quia dolorum in. Sunt molestiae ipsum
                        at consequatur vero. Architecto ut pariatur autem ad non cumque nesciunt qui maxime. Sunt eum quia
                        impedit dolore alias explicabo ea.
                    </p>
                </div>

            </div>

        </div>

    </section><!-- /Service Details Section -->
@endsection
