@extends('layouts.app')
@section('content')
@section('css')
<style>
    .masthead-entry-3 {
        background-image: url("/assets/img/bg/industries.jpg") !important;
    }
</style>
@endsection
<!-- Masthead -->
{{-- <div class="masthead">
    <div class="masthead-entry-3 text-right parallax" data-stellar-background-ratio="0.3">
        <div class="inner rel-1">
            <div class="container">
                <h1 class="wow fadeInUp">Take a look at some of our work.</h1>
            </div>
            <div class="entry-line"></div>
        </div>
    </div>
</div> --}}

<main class="main">
    <section id="showcase" class="showcase showcase-dark bgc-dark text-white text-center section">
        <div class="container">
            <div class="row">
                <header class="text-center col-md-8 col-md-offset-2">
                    <h2 class="text-white">Our Portfolio Showcase</h2>
                    <div class="delimiter-2"><img alt="" src="{{ asset('assets/img/delimiter.png') }}"></div>
                    <p class="section-entry">Some of our recent work of the hundreds that we have for our customers
                        around the world are displayed in here</p>
                </header>
            </div>
        </div>
        <ul class="filter">
            <li class="active" data-filter="*"><a href="">All</a></li>
            <li data-filter=".education" class=""><a href="">Education</a></li>
            <li data-filter=".start-ups"><a href="">Start Ups</a></li>
            <li data-filter=".supply-chain"><a href="">Supply Chain</a></li>
            <li data-filter=".ecommerce"><a href="">Ecommerce</a></li>
            <li data-filter=".website"><a href="">Finance</a></li>
        </ul>
        <div class="js-iso">
            <div class="grid-sizer"></div>
            <div class="education col-showcase w2 js-iso-item">
                <figure>
                    <div class="image-holder"><img alt="" src="{{ asset('assets/img/portfolio/1-thumb.jpg') }}"></div>
                    <figcaption class="figcaption-gradient">
                        <div class="showcase-lead">
                            <div class="showcase-category">Graphic Designer, Photoshop</div>
                            <h3 class="showcase-title">Web Portfolio</h3>
                            <div class="showcase-cntrls">
                                <a href="#" class="icon-round icon-round-medium"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="#" class="icon-round icon-round-medium"><i
                                        class="fa fa fa-link"></i></a>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="education col-showcase js-iso-item">
                <figure>
                    <div class="image-holder"><img alt="" src="{{ asset('assets/img/portfolio/2-thumb.jpg') }}"></div>
                    <figcaption class="figcaption-gradient">
                        <div class="showcase-lead">
                            <div class="showcase-category">Graphic Designer, Photoshop</div>
                            <h3 class="showcase-title">Web Portfolio</h3>
                            <div class="showcase-cntrls">
                                <a href="#" class="icon-round icon-round-medium"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="#" class="icon-round icon-round-medium"><i
                                        class="fa fa fa-link"></i></a>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="start-ups col-showcase js-iso-item">
                <figure>
                    <div class="image-holder"><img alt="" src="{{ asset('assets/img/portfolio/3-thumb.jpg') }}"></div>
                    <figcaption class="figcaption-gradient">
                        <div class="showcase-lead">
                            <div class="showcase-category">Graphic Designer, Photoshop</div>
                            <h3 class="showcase-title">Web Portfolio</h3>
                            <div class="showcase-cntrls">
                                <a href="#" class="icon-round icon-round-medium"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="#" class="icon-round icon-round-medium"><i
                                        class="fa fa fa-link"></i></a>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="start-ups col-showcase js-iso-item">
                <figure>
                    <div class="image-holder"><img alt="" src="{{ asset('assets/img/portfolio/4-thumb.jpg') }}"></div>
                    <figcaption class="figcaption-gradient">
                        <div class="showcase-lead">
                            <div class="showcase-category">Graphic Designer, Photoshop</div>
                            <h3 class="showcase-title">Web Portfolio</h3>
                            <div class="showcase-cntrls">
                                <a href="#" class="icon-round icon-round-medium"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="#" class="icon-round icon-round-medium"><i
                                        class="fa fa fa-link"></i></a>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="supply-chain col-showcase js-iso-item">
                <figure>
                    <div class="image-holder"><img alt="" src="{{ asset('assets/img/portfolio/5-thumb.jpg') }}"></div>
                    <figcaption class="figcaption-gradient">
                        <div class="showcase-lead">
                            <div class="showcase-category">Graphic Designer, Photoshop</div>
                            <h3 class="showcase-title">Web Portfolio</h3>
                            <div class="showcase-cntrls">
                                <a href="#" class="icon-round icon-round-medium"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="#" class="icon-round icon-round-medium"><i
                                        class="fa fa fa-link"></i></a>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="supply-chain col-showcase w2 js-iso-item">
                <figure>
                    <div class="image-holder"><img alt="" src="{{ asset('assets/img/portfolio/6-thumb.jpg') }}"></div>
                    <figcaption class="figcaption-gradient">
                        <div class="showcase-lead">
                            <div class="showcase-category">Graphic Designer, Photoshop</div>
                            <h3 class="showcase-title">Web Portfolio</h3>
                            <div class="showcase-cntrls">
                                <a href="#" class="icon-round icon-round-medium"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="#" class="icon-round icon-round-medium"><i
                                        class="fa fa fa-link"></i></a>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="ecommerce col-showcase js-iso-item">
                <figure>
                    <div class="image-holder"><img alt="" src="{{ asset('assets/img/portfolio/7-thumb.jpg') }}"></div>
                    <figcaption class="figcaption-gradient">
                        <div class="showcase-lead">
                            <div class="showcase-category">Graphic Designer, Photoshop</div>
                            <h3 class="showcase-title">New Project Web Portfolio</h3>
                            <div class="showcase-cntrls">
                                <a href="#" class="icon-round icon-round-medium"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="#" class="icon-round icon-round-medium"><i
                                        class="fa fa fa-link"></i></a>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="ecommerce col-showcase js-iso-item">
                <figure>
                    <div class="image-holder"><img alt="" src="{{ asset('assets/img/portfolio/8-thumb.jpg') }}"></div>
                    <figcaption class="figcaption-gradient">
                        <div class="showcase-lead">
                            <div class="showcase-category">Graphic Designer, Photoshop</div>
                            <h3 class="showcase-title">New Project Web Portfolio</h3>
                            <div class="showcase-cntrls">
                                <a href="#" class="icon-round icon-round-medium"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="#" class="icon-round icon-round-medium"><i
                                        class="fa fa fa-link"></i></a>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
        {{-- <div class="section-body">
            <a href="portfolio.html" class="btn btn-b-white">
                <span class="text">Our portfolio</span>
                <span class="flip-front">Our portfolio</span>
                <span class="flip-back">View all</span>
            </a>
        </div> --}}
    </section>
</main>
@endsection
