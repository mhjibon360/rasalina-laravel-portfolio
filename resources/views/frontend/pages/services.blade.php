@extends('frontend.layouts.frontend_master')
@section('title', 'all services')
@section('main')
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb__wrap">
            <div class="container custom-container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="breadcrumb__wrap__content">
                            <h2 class="title">All Services</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb__wrap__icon">
                <ul>
                    <li><img src="{{ asset('frontend') }}/assets/img/icons/breadcrumb_icon01.png" alt=""></li>
                    <li><img src="{{ asset('frontend') }}/assets/img/icons/breadcrumb_icon02.png" alt=""></li>
                    <li><img src="{{ asset('frontend') }}/assets/img/icons/breadcrumb_icon03.png" alt=""></li>
                    <li><img src="{{ asset('frontend') }}/assets/img/icons/breadcrumb_icon04.png" alt=""></li>
                    <li><img src="{{ asset('frontend') }}/assets/img/icons/breadcrumb_icon05.png" alt=""></li>
                    <li><img src="{{ asset('frontend') }}/assets/img/icons/breadcrumb_icon06.png" alt=""></li>
                </ul>
            </div>
        </section>
        <!-- breadcrumb-area-end -->


        <!-- blog-area -->
        <section class="standard__blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row g-3">
                            @foreach ($allservices as $service)
                                <div class="col-xl-3">
                                    <div class="services__item">
                                        <div class="services__thumb">
                                            <a href="{{ route('servics.deatails', [$service->id, $service->slug]) }}"><img
                                                    src="{{ asset($service->thumbnail_image) }}" alt=""></a>
                                        </div>
                                        <div class="services__content">
                                            <div class="services__icon">
                                                <img class="light" src="{{ asset($service->icon) }}" alt="">
                                                <img class="dark" src="{{ asset($service->icon) }}" alt="">
                                            </div>
                                            <h3 class="title"><a
                                                    href="{{ route('servics.deatails', [$service->id, $service->slug]) }}">{{ $service->title }}</a>
                                            </h3>
                                            <p>{!! Str::limit(strip_tags($service->details), '50') !!}</p>
                                            <ul class="services__list">
                                                <li>Research & Data</li>
                                                <li>Branding & Positioning</li>
                                                <li>Business Consulting</li>
                                                <li>Go To Market</li>
                                            </ul>
                                            <a href="{{ route('servics.deatails', [$service->id, $service->slug]) }}"
                                                class="btn border-btn">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="pagination-wrap">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    {{ $allservices->links('pagination::bootstrap-4') }}
                                </ul>
                            </nav>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- blog-area-end -->


        <!-- contact-area -->
        {{-- <section class="homeContact homeContact__style__two">
            <div class="container">
                <div class="homeContact__wrap">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="section__title">
                                <span class="sub-title">07 - Say hello</span>
                                <h2 class="title">Any questions? Feel free <br> to contact</h2>
                            </div>
                            <div class="homeContact__content">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form</p>
                                <h2 class="mail"><a href="mailto:Info@webmail.com">Info@webmail.com</a></h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="homeContact__form">
                                <form action="#">
                                    <input type="text" placeholder="Enter name*">
                                    <input type="email" placeholder="Enter mail*">
                                    <input type="number" placeholder="Enter number*">
                                    <textarea name="message" placeholder="Enter Massage*"></textarea>
                                    <button type="submit">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- contact-area-end -->

    </main>

@endsection
