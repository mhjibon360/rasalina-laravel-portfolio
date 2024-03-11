@php
    $footer = App\Models\Footer::first();
@endphp
<footer class="footer">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-4">
                <div class="footer__widget">
                    <div class="fw-title">
                        <h5 class="sub-title">{{ $footer->contact_title }}</h5>
                        <h4 class="title">{{ $footer->contact_number }}</h4>
                    </div>
                    <div class="footer__widget__text">
                        <p>{{ $footer->contact_details }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="footer__widget">
                    <div class="fw-title">
                        <h5 class="sub-title">{{ $footer->address_title }}</h5>
                        <h4 class="title">{{ $footer->address_name }}</h4>
                    </div>
                    <div class="footer__widget__address">
                        {{-- <p>Level 13, 2 Elizabeth Steereyt set <br> Melbourne, Victoria 3000</p> --}}
                        <p>{{ $footer->address_location }}</p>
                        <a href="mailto:{{ $footer->address_email }}" class="mail">{{ $footer->address_email }}</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="footer__widget">
                    <div class="fw-title">
                        <h5 class="sub-title">{{ $footer->follow_title }}</h5>
                        <h4 class="title">{{ $footer->follow_big_title }}</h4>
                    </div>
                    <div class="footer__widget__social">
                        {{-- <p>Lorem ipsum dolor sit amet enim. <br> Etiam ullamcorper.</p> --}}
                        <p>{{ $footer->follow_details }}</p>
                        <ul class="footer__social__list">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright__wrap">
            <div class="row">
                <div class="col-12">
                    <div class="copyright__text text-center">
                        {!! $footer->footer_title !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
