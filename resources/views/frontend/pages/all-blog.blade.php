@extends('frontend.layouts.frontend_master')
@section('title', 'all blog')
@section('main')

    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb__wrap">
            <div class="container custom-container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="breadcrumb__wrap__content">
                            <h2 class="title">All Blog List</h2>
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
                    <div class="col-lg-8">
                        @foreach ($allblog as $blog)
                            <div class="standard__blog__post">
                                <div class="standard__blog__thumb">
                                    <a href="{{ route('blog.details.', [$blog->id, $blog->slug]) }}"><img
                                            src="{{ asset($blog->image) }}" alt=""></a>
                                    <a href="{{ route('blog.details.', [$blog->id, $blog->slug]) }}" class="blog__link"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                                <div class="standard__blog__content">
                                    <div class="blog__post__avatar">
                                        <div class="thumb"><img src="{{ asset($blog->image) }}" alt=""></div>
                                        <span class="post__by">By : <a href="#">Mehedi Hassan Jibon</a></span>
                                    </div>
                                    <h2 class="title"><a
                                            href="{{ route('blog.details.', [$blog->id, $blog->slug]) }}">{{ $blog->title }}.</a>
                                    </h2>
                                    <p>{!! Str::limit(strip_tags($blog->details), '100', '...') !!}</p>
                                    <ul class="blog__post__meta">
                                        <li><i class="fal fa-calendar-alt"></i> {{ $blog->created_at->diffForHumans() }}
                                        </li>
                                        <li><i class="fas fa-eye"></i> <a href="#">view ({{ $blog->view }})</a>
                                        </li>
                                        <li class="post-share"><a href="#"><i class="fal fa-share-all"></i> (18)</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach


                        <div class="pagination-wrap">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    {{ $allblog->links('pagination::bootstrap-4') }}

                                </ul>
                            </nav>
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
                                        <li class="sidebar__cat__item"><a href="{{ route('category.blog',$category->slug) }}">{{ $category->name }}
                                                ({{ count($categoryPostCount) }})
                                            </a></li>
                                    @endforeach
                                </ul>
                            </div>


                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->


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
        </section>
        <!-- contact-area-end -->

    </main>
@endsection
