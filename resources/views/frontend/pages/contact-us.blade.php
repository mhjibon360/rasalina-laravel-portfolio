@extends('frontend.layouts.frontend_master')
@section('title', 'portfolio | contact us')
@section('main')
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb__wrap">
            <div class="container custom-container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="breadcrumb__wrap__content">
                            <h2 class="title">Contact us</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home.page') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb__wrap__icon">
                <ul>
                    <li><img src="{{ asset('frontend') }}assets/img/icons/breadcrumb_icon01.png" alt=""></li>
                    <li><img src="{{ asset('frontend') }}assets/img/icons/breadcrumb_icon02.png" alt=""></li>
                    <li><img src="{{ asset('frontend') }}assets/img/icons/breadcrumb_icon03.png" alt=""></li>
                    <li><img src="{{ asset('frontend') }}assets/img/icons/breadcrumb_icon04.png" alt=""></li>
                    <li><img src="{{ asset('frontend') }}assets/img/icons/breadcrumb_icon05.png" alt=""></li>
                    <li><img src="{{ asset('frontend') }}assets/img/icons/breadcrumb_icon06.png" alt=""></li>
                </ul>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- contact-map -->
        <div id="contact-map">
            {!! $map->map_link !!}
        </div>
        <!-- contact-map-end -->

        <!-- contact-area -->
        <div class="contact-area">
            <div class="container">
                <form action="{{ route('send.message') }}" class="contact__form" method="POST">
                    @csrf
                    @method('post')
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" placeholder="Enter your name*" name="name" value="{{ old('name') }}">
                            @error('name')
                                <span class=" text-danger" style="display: block;text-align:left;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <input type="email" placeholder="Enter your mail*" name="email">
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Enter your subject*" name="subject">
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Your Country*" name="country">
                        </div>
                    </div>
                    <textarea name="message" id="message" placeholder="Enter your massage*"></textarea>
                    <button type="submit" class="btn">send massage</button>
                </form>
            </div>
        </div>
        <!-- contact-area-end -->




    </main>

@endsection
