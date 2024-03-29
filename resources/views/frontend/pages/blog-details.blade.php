@extends('frontend.layouts.frontend_master')
@section('title' . $blog->slug)
@section('main')
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb__wrap">
            <div class="container custom-container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="breadcrumb__wrap__content">
                            <h2 class="title">{{ $blog->category->name }}</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
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


        <!-- blog-details-area -->
        <section class="standard__blog blog__details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="standard__blog__post">
                            <div class="standard__blog__thumb">
                                <img src="{{ asset($blog->image) }}" alt="">
                            </div>
                            <div class="blog__details__content services__details__content">
                                <ul class="blog__post__meta">
                                    <li><i class="fal fa-calendar-alt"></i>
                                        {{ $blog->created_at->format('d F Y') }}({{ $blog->created_at->diffForHumans() }})
                                    </li>
                                    <li><i class="fas fa-eye"></i> <a href="#">Views ({{ $blog->view }})</a></li>
                                    {{-- <li class="post-share"><a href="#"><i class="fal fa-share-all"></i> (18)</a></li> --}}
                                </ul>
                                {{-- <h2 class="title">Best website traffics Booster with great tools.</h2> --}}
                                <p>{!! $blog->details !!}</p>
                            </div>
                            <div class="blog__details__bottom">
                                <ul class="blog__details__tag">
                                    <li class="title">Tag:</li>
                                    <li class="tags-list">
                                        @foreach ($tags as $tag)
                                            <a href="{{ route('tag.blog',$blog->tags) }}">{{ $tag }}</a>
                                        @endforeach

                                    </li>
                                </ul>
                                <ul class="blog__details__social">
                                    <li class="title">Share :</li>
                                    <li class="social-icons">
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-twitter-square"></i></a>
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-pinterest"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog__next__prev">
                                <div class="row justify-content-between">
                                    <div class="col-xl-5 col-md-6">
                                        <div class="blog__next__prev__item">
                                            <h4 class="title">Previous Post</h4>
                                            @if ($previoutpost)
                                                <div class="blog__next__prev__post">
                                                    <div class="blog__next__prev__thumb">
                                                        <a
                                                            href="{{ route('blog.details.', [$previoutpost->id, $previoutpost->slug]) }}"><img
                                                                src="{{ asset($previoutpost->image) }}" alt=""></a>
                                                    </div>
                                                    <div class="blog__next__prev__content">
                                                        <h5 class="title"><a
                                                                href="{{ route('blog.details.', [$previoutpost->id, $previoutpost->slug]) }}">{{ $previoutpost->title }}</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-md-6">
                                        <div class="blog__next__prev__item next_post text-end">
                                            <h4 class="title">Next Post</h4>
                                            @if ($nextpost)
                                                <div class="blog__next__prev__post">
                                                    <div class="blog__next__prev__thumb">
                                                        <a
                                                            href="{{ route('blog.details.', [$nextpost->id, $nextpost->slug]) }}"><img
                                                                src="{{ asset($nextpost->image) }}" alt=""></a>
                                                    </div>
                                                    <div class="blog__next__prev__content">
                                                        <h5 class="title"><a
                                                                href="{{ route('blog.details.', [$nextpost->id, $nextpost->slug]) }}">{{ $nextpost->title }}</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <aside class="blog__sidebar">
                            <div class="widget">
                                <form action="#" class="search-form">
                                    <input type="text" placeholder="Search">
                                    <button type="submit"><i class="fal fa-search"></i></button>
                                </form>
                            </div>
                            <div class="widget">
                                <h4 class="widget-title">Recent Blog</h4>
                                <ul class="rc__post">
                                    @foreach ($recentBlog as $blog)
                                        <li class="rc__post__item">
                                            <div class="rc__post__thumb">
                                                <a href="{{ route('blog.details.', [$blog->id, $blog->slug]) }}"><img
                                                        src="{{ asset($blog->image) }}" alt=""></a>
                                            </div>
                                            <div class="rc__post__content">
                                                <h5 class="title"><a
                                                        href="{{ route('blog.details.', [$blog->id, $blog->slug]) }}">{{ $blog->title }}</a>
                                                </h5>
                                                <span class="post-date"><i class="fal fa-calendar-alt"></i>
                                                    {{ $blog->created_at->format('d F Y') }}</span>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                            <div class="widget">
                                <h4 class="widget-title">Categories</h4>
                                <ul class="sidebar__cat">
                                    @foreach ($allCategory as $category)
                                        @php
                                            $categoryPostCount = App\Models\Blog::where(
                                                'category_id',
                                                $category->id,
                                            )->get();
                                        @endphp
                                        <li class="sidebar__cat__item"><a
                                                href="{{ route('category.blog', $category->slug) }}">{{ $category->name }}
                                                ({{ count($categoryPostCount) }})
                                            </a></li>
                                    @endforeach

                                </ul>
                            </div>

                            <div class="widget">
                                <h4 class="widget-title">Popular Tags</h4>
                                <ul class="sidebar__tags">

                                    @foreach ($populartags as $tag)
                                        <li><a href="blog.html">{{ $tag->tags }}</a></li>
                                    @endforeach

                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-details-area-end -->


        <!-- contact-area -->
        <section class="homeContact homeContact__style__two">
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
                                    suffered
                                    alteration in some form</p>
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
        </section>
        <!-- contact-area-end -->

    </main>
@endsection
