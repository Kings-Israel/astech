@extends('layouts.app')
@section('content')
@section('css')
<style>
    .masthead-entry-3 {
        background-image: url("/assets/img/bg/services.jpg") !important;
    }
</style>
@endsection
<!-- Masthead -->
<div class="masthead">
    <div class="masthead-entry-3 text-right parallax" data-stellar-background-ratio="0.3">
        <div class="inner rel-1">
            <div class="container">
                <h1 class="wow fadeInUp">Innovation Meets Execution. We make technology work for you and not vice versa.</h1>
                <div class="inline-buttons">
                    <h3 class="text">We'd Like to catch up with you. Let's setup a meeting soon</h3>
                    <div class="row-base">
                        <a href="#" class="col-base btn-lead btn-primary btn schedule-btn">
                            <span class="text">We'd Like to catch up with you.</span>
                            <span class="flip-front">Click here to schedule</span>
                            <span class="flip-back">Let's Talk</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="entry-line"></div>
        </div>
    </div>
</div>

<main class="main">
    <!-- Services -->
    <section id="services" class="services section">
        <div class="container">
            <div class="row-advantage row">
                <div class="col-advantage col-md-6 col-lg-4">
                    <div class="inner">
                        <div class="media-left"><i class="icon-linear fa fa-laptop"></i></div>
                        <h3 class="media-right">Digital Marketing</h3>
                        <p>We Bring years of hands-on experience and passion for innovation to every project</p>
                    </div>
                </div>
                <div class="col-advantage col-md-6 col-lg-4">
                    <div class="inner">
                        <div class="media-left"><i class="icon-linear fa fa-diamond"></i></div>
                        <h3 class="media-right">UiI/UX Design</h3>
                        <p>Our IT Hub is breeding ground for creative ideas and cutting edge technologies</p>
                    </div>
                </div>
                <div class="col-advantage col-md-6 col-lg-4">
                    <div class="inner">
                        <div class="media-left"><i class="icon-linear fa fa-cube"></i></div>
                        <h3 class="media-right">Web Development</h3>
                        <p>Our network and understanding of global tech trends keep us ahead of the curve</p>
                    </div>
                </div>
                <div class="col-advantage col-md-6 col-lg-4">
                    <div class="inner">
                        <div class="media-left"><i class="icon-linear fa fa-lock"></i></div>
                        <h3 class="media-right">Mobile App Development</h3>
                        <p>Lorem iapsum dolor sit amet, consectetur adipiscing elit. Aliquam vehicula mollis urna vel dignissim.</p>
                    </div>
                </div>
                <div class="col-advantage col-md-6 col-lg-4">
                    <div class="inner">
                        <div class="media-left"><i class="icon-linear fa fa-euro"></i></div>
                        <h3 class="media-right">Offert Price</h3>
                        <p>Lorem iapsum dolor sit amet, consectetur adipiscing elit. Aliquam vehicula mollis urna
                            vel dignissim.</p>
                    </div>
                </div>
                {{-- <div class="col-advantage col-md-6 col-lg-4">
                    <div class="inner">
                        <div class="media-left"><i class="icon-linear fa fa-shopping-cart"></i></div>
                        <h3 class="media-right">Ready Shopping</h3>
                        <p>Lorem iapsum dolor sit amet, consectetur adipiscing elit. Aliquam vehicula mollis urna
                            vel dignissim.</p>
                    </div>
                </div>
                <div class="col-advantage col-md-6 col-lg-4">
                    <div class="inner">
                        <div class="media-left"><i class="icon-linear fa fa-coffee"></i></div>
                        <h3 class="media-right">Easy to Customize</h3>
                        <p>Lorem iapsum dolor sit amet, consectetur adipiscing elit. Aliquam vehicula mollis urna
                            vel dignissim.</p>
                    </div>
                </div>
                <div class="col-advantage col-md-6 col-lg-4">
                    <div class="inner">
                        <div class="media-left"><i class="icon-linear fa fa-code"></i></div>
                        <h3 class="media-right">Clean Code</h3>
                        <p>Lorem iapsum dolor sit amet, consectetur adipiscing elit. Aliquam vehicula mollis urna
                            vel dignissim.</p>
                    </div>
                </div>
                <div class="col-advantage col-md-6 col-lg-4">
                    <div class="inner">
                        <div class="media-left"><i class="icon-linear fa fa-gear"></i></div>
                        <h3 class="media-right">Support 24/7</h3>
                        <p>Lorem iapsum dolor sit amet, consectetur adipiscing elit. Aliquam vehicula mollis urna
                            vel dignissim.</p>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
</main>
@endsection
