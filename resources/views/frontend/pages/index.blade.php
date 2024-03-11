@extends('frontend.layouts.frontend_master')
@section('title', 'Mehedi Portfolio')
@section('main')
    <main>

        <!-- banner-area -->
        <section class="banner">
            <div class="container custom-container">
                <div class="row align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-lg-6 order-0 order-lg-2">
                        <div class="banner__img text-center text-xxl-end">
                            <img src="{{ asset($homehero->image) }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="banner__content">
                            <h2 class="title wow fadeInUp" data-wow-delay=".2s"><span>{{ $homehero->ttile }}</span> <br>
                                Product in the shortest time.</h2>
                            <p class="wow fadeInUp" data-wow-delay=".4s">{{ $homehero->details }}</p>
                            <a href="about.html" class="btn banner__btn wow fadeInUp"
                                data-wow-delay=".6s">{{ $homehero->button_text }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scroll__down">
                <a href="#aboutSection" class="scroll__link">Scroll down</a>
            </div>
            <div class="banner__video">
                <a href="{{ $homehero->view_link }}" class="popup-video"><i class="fas fa-play"></i></a>

        </section>
        <!-- banner-area-end -->

        <!-- about-area -->
        <section id="aboutSection" class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <ul class="about__icons__wrap">
                            @foreach ($multiImage as $image)
                                <li>
                                    <img class="light" src="{{ $image->image_name }}" alt="XD">
                                    <img class="dark" src="{{ asset('frontend') }}/assets/img/icons/xd.png"
                                        alt="XD">
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content">
                            <div class="section__title">
                                <span class="sub-title">{{ $homeAbout->small_title }}</span>
                                <h2 class="title">{{ $homeAbout->title }}</h2>
                            </div>
                            <div class="about__exp">
                                <div class="about__exp__icon">
                                    <img src="{{ asset($homeAbout->logo) }}" alt="">
                                </div>
                                <div class="about__exp__content">
                                    <p>{!! $homeAbout->experience_title !!}</p>
                                </div>
                            </div>
                            <p class="desc">{{ $homeAbout->details }}</p>
                            <a href="{{ route('cv.download') }}" class="btn">Download my resume</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- services-area -->
        <section class="services">
            <div class="container">
                <div class="services__title__wrap">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-5 col-lg-6 col-md-8">
                            <div class="section__title">
                                <span class="sub-title">{{ $servcap->title }}</span>
                                <h2 class="title">{{ $servcap->details }}</h2>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-4">
                            <div class="services__arrow"></div>
                        </div>
                    </div>
                </div>
                <div class="row gx-0 services__active">
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
            </div>
        </section>
        <!-- services-area-end -->

        <!-- work-process-area -->
        <section class="work__process">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section__title text-center">
                            <span class="sub-title">{{ $workCap->title }}</span>
                            <h2 class="title">{{ $workCap->details }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row work__process__wrap">
                    @foreach ($allwork as $work)
                        <div class="col">
                            <div class="work__process__item">
                                <span class="work__process_step">{{ $work->small_title }}</span>
                                <div class="work__process__icon">
                                    <img class="light" src="{{ asset($work->icon) }}" alt="">
                                    <img class="dark" src="{{ asset($work->icon) }}" alt="">
                                </div>
                                <div class="work__process__content">
                                    <h4 class="title">{{ $work->title }}</h4>
                                    <p>{!! strip_tags($work->details) !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- work-process-area-end -->

        <!-- portfolio-area -->
        <section class="portfolio">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section__title text-center">
                            <span class="sub-title">{{ $portCap->title }}</span>
                            <h2 class="title">{{ $portCap->details }}</h2>
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-content" id="portfolioTabContent">
                <div class="tab-pane show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                    <div class="container">
                        <div class="row gx-0 justify-content-center">
                            <div class="col">
                                <div class="portfolio__active">
                                    @foreach ($allPortfolio as $port)
                                        <div class="portfolio__item">
                                            <div class="portfolio__thumb">
                                                <img src="{{ asset($port->image) }}" alt="">
                                            </div>
                                            <div class="portfolio__overlay__content">
                                                <span>{{ $port->title }}</span>
                                                <h4 class="title"><a
                                                        href="portfolio-details.html">{!! Str::limit(strip_tags($port->details), '30', '...') !!}</a></h4>
                                                <a href="{{ route('portfolio.details', [$port->id, $port->slug]) }}"
                                                    class="link">Case Study</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                @foreach ($portCategory as $category)
                    <div class="tab-pane" id="#category/{{ $category->id }}" role="tabpanel"
                        aria-labelledby="category/{{ $category->id }}">
                        <div class="container">
                            <div class="row gx-0 justify-content-center">
                                <div class="col">
                                    <div class="portfolio__active">
                                        @php
                                            $catportitem = App\Models\Portfolio::where('category_id', $category->id)
                                                ->where('status', 1)
                                                ->latest()
                                                ->get();

                                        @endphp
                                        @foreach ($catportitem as $item)
                                            <div class="portfolio__item">
                                                <div class="portfolio__thumb">
                                                    <img src="{{ asset($item->image) }}" alt="">
                                                </div>
                                                <div class="portfolio__overlay__content">
                                                    <span>{{ $item->title }}</span>
                                                    <h4 class="title"><a
                                                            href="portfolio-details.html">{!! Str::limit(strip_tags($item->details), '30', '...') !!}</a></h4>
                                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
        </section>
        <!-- portfolio-area-end -->

        <!-- partner-area -->
        <section class="partner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <ul class="partner__logo__wrap">
                            @foreach ($partmulimg as $img)
                                <li>
                                    <img class="light" src="{{ asset($img->image_name) }}" alt="">
                                    {{-- <img class="dark" src="{{ asset('frontend') }}/assets/img/icons/partner_01.png"
                                  alt=""> --}}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="partner__content">
                            <div class="section__title">
                                <span class="sub-title">{{ $partCap->small_title }}</span>
                                <h2 class="title">{{ $partCap->title }}</h2>
                            </div>
                            <p>{{ $partCap->details }}</p>
                            <a href="contact.html" class="btn">Start a conversation</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- partner-area-end -->

        <!-- testimonial-area -->
        <section class="testimonial">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 order-0 order-lg-2">
                        <ul class="testimonial__avatar__img">
                            @foreach ($clientMultimg as $img)
                                <li><img src="{{ asset($img->image_name) }}" alt=""
                                        style="height: 100px;width:100px;">
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-xl-5 col-lg-6">
                        <div class="testimonial__wrap">
                            <div class="section__title">
                                <span class="sub-title">{{ $clientcap->title }}</span>
                                <h2 class="title">{{ $clientcap->details }}</h2>
                            </div>
                            <div class="testimonial__active">
                                @foreach ($clientfeedback as $feedback)
                                    <div class="testimonial__item">
                                        <div class="testimonial__icon">
                                            <i class="fas fa-quote-left"></i>
                                        </div>
                                        <div class="testimonial__content">
                                            <p>{{ $feedback->comment }}</p>
                                            <div class="testimonial__avatar">
                                                <span>{{ $feedback->name }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <div class="testimonial__arrow"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-area-end -->

        <!-- blog-area -->
        <section class="blog">
            <div class="container">
                <div class="row gx-0 justify-content-center">
                    @foreach ($allBlogs as $blog)
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="blog__post__item">
                                <div class="blog__post__thumb">
                                    <a href="{{ route('blog.details.', [$blog->id, $blog->slug]) }}"><img
                                            src="{{ asset($blog->image) }}" alt=""
                                            style="height: 350px;max-height:350px;"></a>
                                    <div class="blog__post__tags">
                                        <a href="blog.html">{{ $blog->category->name }}</a>
                                    </div>
                                </div>
                                <div class="blog__post__content">
                                    <span class="date"> {{ $blog->created_at->diffForHumans() }}</span>
                                    <h3 class="title"><a
                                            href="{{ route('blog.details.', [$blog->id, $blog->slug]) }}">{{ $blog->title }}</a>
                                    </h3>
                                    <a href="{{ route('blog.details.', [$blog->id, $blog->slug]) }}"
                                        class="read__more">Read mORe</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="blog__button text-center">
                    <a href="blog.html" class="btn">more blog</a>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->

        <!-- contact-area -->
        {{-- <section class="homeContact">
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
