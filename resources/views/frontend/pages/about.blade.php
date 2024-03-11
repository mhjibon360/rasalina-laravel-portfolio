@extends('frontend.layouts.frontend_master')
@section('title', 'about page')
@section('main')

    <!-- main-area -->
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb__wrap">
            <div class="container custom-container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="breadcrumb__wrap__content">
                            <h2 class="title">{{ $homeAbout->small_title }}</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home.page') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">About</li>
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

        <!-- about-area -->
        <section class="about about__style__two">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about__image">
                            <img src="{{ asset($homehero->image) }}" alt="">
                        </div>
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
                <div class="row">
                    <div class="col-12">
                        <div class="about__info__wrap">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="about-tab" data-bs-toggle="tab"
                                        data-bs-target="#about" type="button" role="tab" aria-controls="about"
                                        aria-selected="true">About</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="skills-tab" data-bs-toggle="tab" data-bs-target="#skills"
                                        type="button" role="tab" aria-controls="skills"
                                        aria-selected="false">Skills</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="awards-tab" data-bs-toggle="tab" data-bs-target="#awards"
                                        type="button" role="tab" aria-controls="awards"
                                        aria-selected="false">awards</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="education-tab" data-bs-toggle="tab"
                                        data-bs-target="#education" type="button" role="tab" aria-controls="education"
                                        aria-selected="false">education</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="about" role="tabpanel"
                                    aria-labelledby="about-tab">
                                    <p class="desc">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to use
                                        a passage of lorem ipsum, you need to be sure there isn't anything embarrassing
                                        hidden in the middle of text. All the lorem ipsum generators on the Internet tend to
                                        repeat predefined chunks as necessary, making this the first true generator on the
                                        internet. It uses a dictionary of over 200 Latin words, combined with a handful of
                                        model sentence structures, to generate Lorem Ipsum which looks reasonable. The
                                        generated lorem ipsum is therefore always free from repetition, injected humour, or
                                        non-characteristic words etc.</p>
                                    <ul class="about__exp__list">
                                        <li>
                                            <h5 class="title">User experience design - (Product Design)</h5>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour, or
                                                randomised words which dont look even slightly believable. If you are going
                                                to unseery.</p>
                                        </li>
                                        <li>
                                            <h5 class="title">Web and user interface design - Development</h5>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour, or
                                                randomised words which dont look even slightly believable. If you are going
                                                to use a passage of lorem ipsum.</p>
                                        </li>
                                        <li>
                                            <h5 class="title">Interaction design - Animation</h5>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour, or
                                                randomised words which dont look even slightly believable.</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
                                    <div class="about__skill__wrap">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="about__skill__item">
                                                    <h5 class="title">Communication</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 70%;"
                                                            aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="percentage">70%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="about__skill__item">
                                                    <h5 class="title">Brain Storming</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 90%;"
                                                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="percentage">90%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="about__skill__item">
                                                    <h5 class="title">Resourcefulness</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%;"
                                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="percentage">50%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="about__skill__item">
                                                    <h5 class="title">Figma</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 65%;"
                                                            aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="percentage">65%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="about__skill__item">
                                                    <h5 class="title">Analytical Abilities</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 80%;"
                                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="percentage">80%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="about__skill__item">
                                                    <h5 class="title">Skeatch</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 45%;"
                                                            aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="percentage">45%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="about__skill__item">
                                                    <h5 class="title">User Research</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 55%;"
                                                            aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="percentage">55%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="about__skill__item">
                                                    <h5 class="title">Adobe Tools</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 85%;"
                                                            aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="percentage">85%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="awards" role="tabpanel" aria-labelledby="awards-tab">
                                    <div class="about__award__wrap">
                                        <div class="row justify-content-center">
                                            <div class="col-md-6 col-sm-9">
                                                <div class="about__award__item">
                                                    <div class="award__logo">
                                                        <img src="{{ asset('frontend') }}/assets/img/images/awards_01.png"
                                                            alt="">
                                                    </div>
                                                    <div class="award__content">
                                                        <h5 class="title">Best ux designer award in 2002</h5>
                                                        <p>There are many variations of passages of Lorem Ipsum available,
                                                            but the majority have suffered alteration in some form, by
                                                            injected humour,</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-9">
                                                <div class="about__award__item">
                                                    <div class="award__logo">
                                                        <img src="{{ asset('frontend') }}/assets/img/images/awards_02.png"
                                                            alt="">
                                                    </div>
                                                    <div class="award__content">
                                                        <h5 class="title">BBA final examination 2001</h5>
                                                        <p>There are many variations of passages of Lorem Ipsum available,
                                                            but the majority have suffered alteration in some form, by
                                                            injected humour,</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-9">
                                                <div class="about__award__item">
                                                    <div class="award__logo">
                                                        <img src="{{ asset('frontend') }}/assets/img/images/awards_03.png"
                                                            alt="">
                                                    </div>
                                                    <div class="award__content">
                                                        <h5 class="title">User research award 2020</h5>
                                                        <p>There are many variations of passages of Lorem Ipsum available,
                                                            but the majority have suffered alteration in some form, by
                                                            injected humour,</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-9">
                                                <div class="about__award__item">
                                                    <div class="award__logo">
                                                        <img src="{{ asset('frontend') }}/assets/img/images/awards_04.png"
                                                            alt="">
                                                    </div>
                                                    <div class="award__content">
                                                        <h5 class="title">Dsigning award 2021</h5>
                                                        <p>There are many variations of passages of Lorem Ipsum available,
                                                            but the majority have suffered alteration in some form, by
                                                            injected humour,</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="education" role="tabpanel"
                                    aria-labelledby="education-tab">
                                    <div class="about__education__wrap">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="about__education__item">
                                                    <h3 class="title">DPR Engineering Dhaka University</h3>
                                                    <span class="date">2004 – 2016</span>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but
                                                        the majority have suffered alteration in some form, by injected
                                                        humour,There are many variations of passages of Lorem Ipsum
                                                        available, but the majority have suffered
                                                        alteration in some form, by injected humour.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="about__education__item">
                                                    <h3 class="title">Product Designer at google</h3>
                                                    <span class="date">2021 – Present</span>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but
                                                        the majority have suffered alteration in some form, by injected
                                                        humour,There are many variations of passages of Lorem Ipsum
                                                        available.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="about__education__item">
                                                    <h3 class="title">Computer Science - england</h3>
                                                    <span class="date">2008 – 2012</span>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but
                                                        the majority have suffered alteration in some form, by injected
                                                        humour,There are many variations of passages of Lorem Ipsum
                                                        available.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="about__education__item">
                                                    <h3 class="title">Pro product design with udemey</h3>
                                                    <span class="date">2016 - 2020</span>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but
                                                        the majority have suffered alteration in some form, by injected
                                                        humour,There are many variations of passages of Lorem Ipsum
                                                        available, but the majority have suffered
                                                        alteration in some form, by injected humour.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->



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

    </main>
    <!-- main-area-end -->
@endsection
