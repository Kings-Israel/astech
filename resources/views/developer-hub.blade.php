@extends('layouts.app')
@section('content')
@section('css')
<style>
    h3 {
        font-size: 60px;
    }
    h4 {
        font-size: 30px;
    }
    .masthead-entry-3 {
        background-image: url("/assets/img/bg/developer-hub.jpg") !important;
    }
</style>
@endsection
<div class="masthead">
    <div class="masthead-entry-3 text-right parallax" data-stellar-background-ratio="0.3">
        <div class="inner rel-1">
            <div class="container">
                <h3 class="wow fadeInDown">Our team? Total tech geeks! We eat, sleep, and breathe IT. </h3>
                <h4 class="wow fadeIn">Expect nothing less than a bunch of passionate nerds who love making tech magic happen</h4>
            </div>
            <div class="entry-line"></div>
        </div>
    </div>
</div>
<section id="team" class="team-3 text-center section">
    <div class="container">
        <div class="row">
            <header class="text-center col-md-8 col-md-offset-2">
                <h2>Met the creative</h2>
                <div class="delimiter-2"><img alt="" src="{{ asset('assets/img/delimiter.png') }}"></div>
                <p class="section-entry">Some of our best developers are displayed here.</p>
            </header>
        </div>
        <div class="section-body">
            <div class="row-base row">
                <div class="col-base col-sm-6 col-md-3">
                    <figure class="team-profile-2">
                        <div class="image-holder image-holder-gradient"><img alt=""
                                src="{{ asset('assets/img/bg/eleven.png') }}"></div>
                        <figcaption>
                            <div class="profile-info">
                                <h5 class="profile-name">Norman Landon</h5>
                                <p class="profile-spec">Ceo / Co-fuder</p>
                                <div class="team-social social-round">
                                    <a href="#" class="fa fa-facebook"></a>
                                    <a href="#" class="fa fa-twitter"></a>
                                    <a href="#" class="fa fa-pinterest-p"></a>
                                    <a href="#" class="fa fa-flickr"></a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-base col-sm-6 col-md-3">
                    <figure class="team-profile-2">
                        <div class="image-holder image-holder-gradient"><img alt=""
                                src="{{ asset('assets/img/bg/eleven.png') }}"></div>
                        <figcaption>
                            <div class="profile-info">
                                <h5 class="profile-name">Betty Novak</h5>
                                <p class="profile-spec">Web Developer</p>
                                <div class="team-social social-round">
                                    <a href="#" class="fa fa-facebook"></a>
                                    <a href="#" class="fa fa-twitter"></a>
                                    <a href="#" class="fa fa-pinterest-p"></a>
                                    <a href="#" class="fa fa-flickr"></a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-base col-sm-6 col-md-3">
                    <figure class="team-profile-2">
                        <div class="image-holder image-holder-gradient"><img alt=""
                                src="{{ asset('assets/img/bg/eleven.png') }}"></div>
                        <figcaption>
                            <div class="profile-info">
                                <h5 class="profile-name">Lizy Hanckoc</h5>
                                <p class="profile-spec">Web Designer</p>
                                <div class="team-social social-round">
                                    <a href="#" class="fa fa-facebook"></a>
                                    <a href="#" class="fa fa-twitter"></a>
                                    <a href="#" class="fa fa-pinterest-p"></a>
                                    <a href="#" class="fa fa-flickr"></a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-base col-sm-6 col-md-3">
                    <figure class="team-profile-2">
                        <div class="image-holder image-holder-gradient"><img alt=""
                                src="{{ asset('assets/img/bg/eleven.png') }}"></div>
                        <figcaption>
                            <div class="profile-info">
                                <h5 class="profile-name">Jhon Doe</h5>
                                <p class="profile-spec">ux/ui Designer</p>
                                <div class="team-social social-round">
                                    <a href="#" class="fa fa-facebook"></a>
                                    <a href="#" class="fa fa-twitter"></a>
                                    <a href="#" class="fa fa-pinterest-p"></a>
                                    <a href="#" class="fa fa-flickr"></a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
