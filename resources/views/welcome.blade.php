<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <!-- Loader -->

    <div class="loader">
        <div class="loader-brand"><img alt="" class="img-responsive center-block" src="{{ asset('assets/img/astech-brand-dark.png') }}"></div>
    </div>

    <!-- Header -->

    <header id="top">
        <div class="navbar navbar-2 affix">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#top" class="brand js-target-scroll">
                        <img class="brand-white" alt="" src="{{ asset('assets/img/astech-alt.png') }}">
                        <img class="brand-dark" alt="" src="{{ asset('assets/img/astech-brand-dark.png') }}">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <a href="#top" class="js-target-scroll">Home</a>
                        </li>
                        <li>
                            <a href="#services" class="js-target-scroll">Services</a>
                        </li>
                        <li>
                            <a href="#showcase" class="js-target-scroll">Portfolio</a>
                        </li>
                        <li>
                            <a href="#features" class="js-target-scroll">Features</a>
                        </li>
                        <li>
                            <a href="#team" class="js-target-scroll">Team</a>
                        </li>
                        <li>
                            <a href="#contact" class="js-target-scroll">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- Masthead -->

    <div class="masthead">
        <div class="masthead-entry-3 text-right parallax" data-stellar-background-ratio="0.3">
            <div class="inner rel-1">
                <div class="container">
                    <h2 class="page-subtitle wow fadeInDown">Welcome to the Astech IT Hub.</h2>
                    <h1 class="wow fadeInUp">Innovation <span class="underline">Starts Here</span></h1>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-4 col-lg-6 col-lg-offset-6">
                            <h3 class="page-subtitle wow">Explore Our IT Ecosystem</h3>
                        </div>
                    </div>
                    <div class="inline-buttons">
                        <div class="row-base">
                            <a href="#" class="col-base btn-lead btn-primary btn">
                                <span class="text">Discovery</span>
                                <span class="flip-front">Reach Out</span>
                                <span class="flip-back">Let's Talk</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="entry-line"></div>
            </div>
        </div>
    </div>

    <!-- Main -->

    <main class="main">

        <!-- Services -->

        <section id="services" class="services section">
            <div class="container">
                <div class="row-advantage row">
                    <div class="col-advantage col-md-6 col-lg-4">
                        <div class="inner">
                            <div class="media-left"><i class="icon-linear fa fa-laptop"></i></div>
                            <h3 class="media-right">Expertise</h3>
                            <p>We Bring years of hands-on experience and passion for innovation to every project</p>
                        </div>
                    </div>
                    <div class="col-advantage col-md-6 col-lg-4">
                        <div class="inner">
                            <div class="media-left"><i class="icon-linear fa fa-diamond"></i></div>
                            <h3 class="media-right">Innovation</h3>
                            <p>Our IT Hub is breeding ground for creative ideas and cutting edge technologies</p>
                        </div>
                    </div>
                    <div class="col-advantage col-md-6 col-lg-4">
                        <div class="inner">
                            <div class="media-left"><i class="icon-linear fa fa-cube"></i></div>
                            <h3 class="media-right">Global Perpective</h3>
                            <p>Our network and understanding of global tech trends keep us ahead of the curve</p>
                        </div>
                    </div>
                    {{-- <div class="col-advantage col-md-6 col-lg-4">
                        <div class="inner">
                            <div class="media-left"><i class="icon-linear fa fa-lock"></i></div>
                            <h3 class="media-right">Confidentiality and Privacy</h3>
                            <p>Lorem iapsum dolor sit amet, consectetur adipiscing elit. Aliquam vehicula mollis urna
                                vel dignissim.</p>
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
                    <div class="col-advantage col-md-6 col-lg-4">
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

        <!-- Reviews -->

        {{-- <section id="reviews" class="reviews-2 masked text-center section">
            <div class="container rel-1">
                <div class="custom-controls">
                    <div class="thumbnail-pagination">
                        <a href=""><img alt="" src="{{ asset('assets/img/team/1.jpg') }}"></a>
                        <a href=""><img alt="" src="{{ asset('assets/img/team/2.jpg') }}"></a>
                        <a href=""><img alt="" src="{{ asset('assets/img/team/3.jpg') }}"></a>
                    </div>
                </div>
                <i class="icon-review fa fa-quote-left"></i>
                <div class="review-carousel carousel">
                    <div class="review">
                        <div class="col-review col-md-8 col-md-offset-2">
                            <p class="review-text">This is the best of the PSD which has been well organized and
                                focused on the smallest details and carefully placed, <strong>from every point of
                                    view</strong> has a lot of potential that</p>
                            <div class="reviewer">
                                <h3 class="reviewer-name">Miranda Österreicher</h3>
                                <p class="reviewer-spec">Web designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="review">
                        <div class="col-review col-md-8 col-md-offset-2">
                            <p class="review-text">This is the best of the PSD which has been well organized and
                                focused on the smallest details and carefully placed, <strong>from every point of
                                    view</strong> has a lot of potential that</p>
                            <div class="reviewer">
                                <h3 class="reviewer-name">Jane Boonbotz</h3>
                                <p class="reviewer-spec">Web developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="review">
                        <div class="col-review col-md-8 col-md-offset-2">
                            <p class="review-text">This is the best of the PSD which has been well organized and
                                focused on the smallest details and carefully placed, <strong>from every point of
                                    view</strong> has a lot of potential that can be explored This is the best of the
                                PSD which has been well organized and focused on the smallest</p>
                            <div class="reviewer">
                                <h3 class="reviewer-name">Bobby Austin</h3>
                                <p class="reviewer-spec">Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <!-- About product -->

        <section id="about-product" class="about-product section">
            <div class="container">
                <div class="row">
                    <div class="col-product-img col-lg-6 col-lg-push-6 wow fadeInRight" data-wow-duration="2s">
                        <img alt="" class="img-responsive" src="{{ asset('assets/img/about.jpg') }}">
                    </div>
                    <div class="col-about-product col-lg-6 col-lg-pull-6">
                        <div class="row-advantage-2 row">
                            <div class="col-advantage col-md-6 col-lg-6">
                                <div class="inner">
                                    <div class="media-left"><i class="fa fa-clock-o"></i></div>
                                    <h3 class="media-right">Digital Marketing</h3>
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-advantage col-md-6 col-lg-6">
                                <div class="inner">
                                    <div class="media-left"><i class="fa fa-cogs"></i></div>
                                    <h3 class="media-right">UI/UX Design</h3>
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-advantage col-md-6 col-lg-6">
                                <div class="inner">
                                    <div class="media-left"><i class="fa fa-desktop"></i></div>
                                    <h3 class="media-right">Web Development</h3>
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-advantage col-md-6 col-lg-6">
                                <div class="inner">
                                    <div class="media-left"><i class="fa fa-mobile"></i></div>
                                    <h3 class="media-right">Mobile App Development</h3>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio -->

        <section id="showcase" class="showcase showcase-dark bgc-dark text-white text-center section">
            <div class="container">
                <div class="row">
                    <header class="text-center col-md-8 col-md-offset-2">
                        <h2 class="text-white">Our Portfolio Showcase</h2>
                        <div class="delimiter-2"><img alt="" src="{{ asset('assets/img/delimiter.png') }}"></div>
                        <p class="section-entry">Some of our recent work of the hundreds that we have for our customers
                            around the world are displayed in Fusce lacinia arcu et nulla. Nulla vitae mauris non felis
                            mollis faucipus.</p>
                    </header>
                </div>
            </div>
            <ul class="filter">
                <li class="active" data-filter="*"><a href="">All</a></li>
                <li data-filter=".illustrator" class=""><a href="">Illustrator</a></li>
                <li data-filter=".photoshop"><a href="">Photoshop</a></li>
                <li data-filter=".website"><a href="">Website</a></li>
                <li data-filter=".photography" class=""><a href="">Photography</a></li>
            </ul>
            <div class="js-iso">
                <div class="grid-sizer"></div>
                <div class="illustrator col-showcase w2 js-iso-item">
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
                <div class="illustrator col-showcase js-iso-item">
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
                <div class="photoshop col-showcase js-iso-item">
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
                <div class="photoshop col-showcase js-iso-item">
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
                <div class="website col-showcase js-iso-item">
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
                <div class="website col-showcase w2 js-iso-item">
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
                <div class="photography col-showcase js-iso-item">
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
                <div class="photography col-showcase js-iso-item">
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
            <div class="section-body">
                <a href="portfolio.html" class="btn btn-b-white">
                    <span class="text">Our portfolio</span>
                    <span class="flip-front">Our portfolio</span>
                    <span class="flip-back">View all</span>
                </a>
            </div>
        </section>

        <!-- Specialization -->

        <section id="specialization" class="specialization text-center section">
            <div class="container">
                <div class="row">
                    <header class="text-center col-md-8 col-md-offset-2">
                        <h2>Insudtries</h2>
                        <div class="delimiter-2"><img alt="" src="{{ asset('assets/img/delimiter.png') }}"></div>
                    </header>
                </div>
                <div class="section-body">
                    <div class="row-base row">
                        <div class="col-spec col-base col-sm-6 col-md-3">
                            <div class="chart" data-percent="100">
                                <div class="chart-icon"><i class="fa fa-book"></i></div>
                            </div>
                            <div class="spec-header">
                                <h3 class="spec-title">Education</h3>
                            </div>
                        </div>
                        <div class="col-spec col-base col-sm-6 col-md-3">
                            <div class="chart" data-percent="100">
                                <div class="chart-icon"><i class="fa fa-lightbulb-o"></i></div>
                            </div>
                            <div class="spec-header">
                                <h3 class="spec-title">Start Ups</h3>
                            </div>
                        </div>
                        <div class="col-spec col-base col-sm-6 col-md-3">
                            <div class="chart" data-percent="100">
                                <div class="chart-icon"><i class="fa fa-truck"></i></div>
                            </div>
                            <div class="spec-header">
                                <h3 class="spec-title">Supply Chain</h3>
                            </div>
                        </div>
                        <div class="col-spec col-base col-sm-6 col-md-3">
                            <div class="chart" data-percent="100">
                                <div class="chart-icon"><i class="fa fa-credit-card"></i></div>
                            </div>
                            <div class="spec-header">
                                <h3 class="spec-title">Ecommerce</h3>
                            </div>
                        </div>
                        <div class="col-spec col-base col-sm-6 col-md-3">
                            <div class="chart" data-percent="100">
                                <div class="chart-icon"><i class="fa fa-dollar"></i></div>
                            </div>
                            <div class="spec-header">
                                <h3 class="spec-title">Finance</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features -->

        <section id="features" class="features2 bgc-light section">
            <div class="container">
                <div class="row">
                    <header class="text-center col-md-8 col-md-offset-2">
                        <h2>Why Choose us</h2>
                        <div class="delimiter-2"><img alt="" src="{{ asset('assets/img/delimiter.png') }}"></div>
                        <p class="section-entry">Get To Know Us Better</p>
                    </header>
                </div>
                <div class="section-body">
                    <div class="row">
                        <div class="col-feature-img2 col-md-6 wow fadeInLeft" data-wow-duration="2s">
                            <img alt="" class="" src="{{ asset('assets/img/Astec-hub-2.jpg') }}">
                        </div>
                        <div class="section-body-x2 col-feature col-md-6">
                            <h2 class="feature-title">
                                Building Brands on The Web
                            </h2>
                            <p class="feature-subtitle">We Deliver High Quality Resolution Graphics</p>
                            <div class="title-space"></div>
                            <p>Fatback pastrami meatball, spare ribs shoulder jowl pork belly t-bone andouille pork chop
                                tenderloin tri-tip prosciutto biltong meatloaf. Pork loin frankfurter strip steak, cow
                                pastrami beef pork belly leberkas landjaeger.</p>
                            <p>Pig prosciutto beef ribeye chuck, turducken short ribs capicola fatback kielbasa
                                landjaeger leberkas shoulder sausage kevin. T-bone alcatra kevin beef ribs ham hock
                                drumstick. T-bone ham beef boudin kielbasa turkey.</p>
                        </div>
                    </div>
                </div>
                <div class="section-body-x2">
                    <div class="row">
                        <div class="col-feature-img2 col-md-6 col-md-push-6 wow fadeInRight" data-wow-duration="2s">
                            <img alt="" class="" src="{{ asset('assets/img/details.jpg') }}">
                        </div>
                        <div class="col-feature col-md-6 col-md-pull-6">
                            <div class="feature">
                                <div class="media-left">
                                    <div class="icon-round icon-feature"><i class="fa fa-leaf"></i></div>
                                </div>
                                <div class="media-body">
                                    <h3>UX/UI Design</h3>
                                    <p>Sed porta sollicitudin eros, vel sagittis turpis consequat nec. Donec ac viverra
                                        ligula, in scelerisque leo. Proin massa quam, ornare</p>
                                </div>
                            </div>
                            <div class="feature">
                                <div class="media-left">
                                    <div class="icon-round icon-feature"><i class="fa fa-gears"></i></div>
                                </div>
                                <div class="media-body">
                                    <h3>Fast Support</h3>
                                    <p>Sed porta sollicitudin eros, vel sagittis turpis consequat nec. Donec ac viverra
                                        ligula, in scelerisque leo. Proin massa quam, ornare</p>
                                </div>
                            </div>
                            <div class="feature">
                                <div class="media-left">
                                    <div class="icon-round icon-feature"><i class="fa fa-lock"></i></div>
                                </div>
                                <div class="media-body">
                                    <h3>Super security</h3>
                                    <p>Sed porta sollicitudin eros, vel sagittis turpis consequat nec. Donec ac viverra
                                        ligula, in scelerisque leo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team -->

        <section id="team" class="team-3 text-center section">
            <div class="container">
                <div class="row">
                    <header class="text-center col-md-8 col-md-offset-2">
                        <h2>Met the creative</h2>
                        <div class="delimiter-2"><img alt="" src="{{ asset('assets/img/delimiter.png') }}"></div>
                        <p class="section-entry">Some of our recent work of the hundreds that we have for our customers
                            around the world are displayed in Fusce lacinia arcu et nulla. Nulla vitae mauris non felis
                            mollis faucipus.</p>
                    </header>
                </div>
                <div class="section-body">
                    <div class="row-base row">
                        <div class="col-base col-sm-6 col-md-3">
                            <figure class="team-profile-2">
                                <div class="image-holder image-holder-gradient"><img alt=""
                                        src="{{ asset('assets/img/team2/1.jpg') }}"></div>
                                <figcaption>
                                    <div class="profile-info">
                                        <h3 class="profile-name">Norman Landon</h3>
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
                                        src="{{ asset('assets/img/team2/2.jp') }}g"></div>
                                <figcaption>
                                    <div class="profile-info">
                                        <h3 class="profile-name">Betty Novak</h3>
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
                                        src="{{ asset('assets/img/team2/3.jpg') }}"></div>
                                <figcaption>
                                    <div class="profile-info">
                                        <h3 class="profile-name">LIzy Hanckoc</h3>
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
                                        src="{{ asset('assets/img/team2/4.jpg') }}"></div>
                                <figcaption>
                                    <div class="profile-info">
                                        <h3 class="profile-name">Jhon Doe</h3>
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

        <!-- Get Start -->

        {{-- <section id="get-start" class="get-start masked text-white text-center" data-stellar-background-ratio="0.4">
            <div class="container rel-1">
                <h2 class="promo-title text-white wow fadeInDown">Unique experience</h2>
                <div class="promo-subtitle wow fadeInUp">
                    <p>Awesome Theme for Wordpress</p>
                </div>
                <div class="inline-buttons">
                    <div class="row-base">
                        <a href="#" class="col-base btn-lead btn-red btn wow fadeInLeft">
                            <span class="text">Get started</span>
                            <span class="flip-front">Get started</span>
                            <span class="flip-back">Start now!</span>
                        </a>
                        <a href="#" class="col-base btn-lead btn-b-white btn wow fadeInRight">
                            <span class="text">Purchase now</span>
                            <span class="flip-front">Purchase now</span>
                            <span class="flip-back">Yeaah!</span>
                        </a>
                    </div>
                </div>
            </div>
        </section> --}}

        <!-- Contact -->

        <section id="contact" class="contact masked contact-2 section">
            <div class="container">
                <div class="row">
                    <header class="text-center col-md-8 col-md-offset-2">
                        <h2 class="text-white">Contact</h2>
                        <div class="delimiter-2"><img alt="" src="{{ asset('assets/img/delimiter.png') }}"></div>
                    </header>
                </div>
                <div class="section-body">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
                            <form class="js-ajax-form">
                                <div class="form-group">
                                    <div class="form-control-layout">
                                        <i class="fa fa-user"></i>
                                        <input type="text" class="form-control" name="name"
                                            placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-control-layout">
                                        <i class="fa fa-envelope-o"></i>
                                        <input type="text" class="form-control" name="email" required
                                            placeholder="Email address *">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-control-layout">
                                        <i class="fa fa-phone"></i>
                                        <input type="text" class="form-control" name="phone"
                                            placeholder="Phone number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-control-layout">
                                        <i class="fa fa-pencil"></i>
                                        <textarea class="form-control" name="message" required placeholder="Write message *"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn-yellow-2 btn-lg btn-block btn">
                                        <span class="text">Send message</span>
                                        <span class="flip-front">Send message</span>
                                        <span class="flip-back">Submit</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Clients -->

        <section id="clients" class="clients bgc-light section">
            <div class="container">
                <div class="row">
                    <header class="text-center col-md-8 col-md-offset-2">
                        <h2>Clients</h2>
                        <div class="delimiter-2"><img alt="" src="{{ asset('assets/img/delimiter.png') }}"></div>
                        <p class="section-entry">Some of our recent work of the hundreds that we have for our customers
                            around the world are displayed in Fusce lacinia arcu et nulla. Nulla vitae mauris non felis
                            mollis faucipus.</p>
                    </header>
                </div>
                <div class="section-body">
                    <div class="clients-carousel">
                        <div class="client">
                            <a href=""><img alt="" src="{{ asset('assets/img/clients/1.png') }}"></a>
                        </div>
                        <div class="client">
                            <a href=""><img alt="" src="{{ asset('assets/img/clients/2.png') }}"></a>
                        </div>
                        <div class="client">
                            <a href=""><img alt="" src="{{ asset('assets/img/clients/3.png') }}"></a>
                        </div>
                        <div class="client">
                            <a href=""><img alt="" src="{{ asset('assets/img/clients/4.png') }}"></a>
                        </div>
                        <div class="client">
                            <a href=""><img alt="" src="{{ asset('assets/img/clients/1.png') }}"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <!-- Footer -->

    <footer class="footer">
        <section class="section bgc-dark">
            <div class="container rel-1">
                <a href="#top" class="scroll-top hvr-wobble-vertical js-target-scroll">
                    <i class="fa fa-chevron-up"></i>
                </a>
                <div class="row-base row">
                    <aside class="bottom-widget-posts col-footer col-base col-md-6 col-lg-8">
                        <h2 class="bottom-widget-title">News Post</h2>
                        <ul class="bottom-post-list">
                            <li>
                                <div class="bottom-post-img">
                                    <a href="#"><img alt="" class="img-responsive"
                                            src="{{ asset('assets/img/posts/1-75x75px.jpg') }}"></a>
                                </div>
                                <div class="media-body">
                                    <h3><a href="#">Tips Useful For Web Designers</a></h3>
                                    <p>Phasellus pulvinar iaculis nunc at placerat. Sed porta sollicitudin</p>
                                    <ul class="bottom-post-meta">
                                        <li><a href="#">Simon McCool </a></li>
                                        <li>2 Weeks ago</li>
                                        <li>Views 3,098</li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="bottom-post-img">
                                    <a href="#"><img alt="" class="img-responsive"
                                            src="{{ asset('assets/img/posts/2-75x75px.jpg') }}"></a>
                                </div>
                                <div class="media-body">
                                    <h3><a href="#">Tips Useful For Designers</a></h3>
                                    <p>Phasellus pulvinar iaculis nunc at placerat. Sed porta sollicitudin</p>
                                    <ul class="bottom-post-meta">
                                        <li><a href="#">Simon McCool </a></li>
                                        <li>2 Weeks ago</li>
                                        <li>Views 3,098</li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </aside>
                    {{-- <aside class="bottom-widget-gallery col-footer col-base col-md-6 col-lg-4">
                        <h2 class="bottom-widget-title">Favorites Flickr</h2>
                        <ul class="bottom-gallery-list">
                            <li>
                                <div class="link-overlay">
                                    <a href="#">
                                        <img alt="" src="{{ asset('assets/img/widget-gallery/1.jpg') }}">
                                        <i class="fa fa-unlink"></i>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="link-overlay">
                                    <a href="#">
                                        <img alt="" src="{{ asset('assets/img/widget-gallery/2.jpg') }}">
                                        <i class="fa fa-unlink"></i>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="link-overlay">
                                    <a href="#">
                                        <img alt="" src="{{ asset('assets/img/widget-gallery/3.jpg') }}">
                                        <i class="fa fa-unlink"></i>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="link-overlay">
                                    <a href="#">
                                        <img alt="" src="{{ asset('assets/img/widget-gallery/4.jpg') }}">
                                        <i class="fa fa-unlink"></i>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="link-overlay">
                                    <a href="#">
                                        <img alt="" src="{{ asset('assets/img/widget-gallery/5.jpg') }}">
                                        <i class="fa fa-unlink"></i>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="link-overlay">
                                    <a href="#">
                                        <img alt="" src="{{ asset('assets/img/widget-gallery/6.jpg') }}">
                                        <i class="fa fa-unlink"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <div class="widget-gallery-control">
                            <a href="#" class="more text-white">
                                <i class="fa fa-chevron-circle-right"></i>
                                <span>View more</span>
                            </a>
                        </div>
                    </aside> --}}
                    <aside class="bottom-widget-text col-footer col-base col-md-12 col-lg-4">
                        <h2 class="bottom-widget-title">About us</h2>
                        <img class="brand-white" alt="" src="{{ asset('assets/img/astech-brand.png') }}">
                        <div class="text-content">
                            <p>Ignite Your Developer journey by Diving into Astech Hub's World of Opportunities</p>
                        </div>
                        <div class="social social-round">
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-linkedin"></a>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
        <div class="footer-bottom">
            <div class="container">
                <div class="row-base row">
                    <div class="copy col-base col-md-6">
                        © {{ now()->format('Y') }}. All rights reserved. <a
                            href="">Astech Hub</a>
                    </div>
                    <div class="col-base col-md-6">
                        <nav class="navbar-bottom">
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Partners</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/smoothscroll.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('assets/js/interface.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp.js"></script>
    <script src="{{ asset('assets/js/gmap.js') }}"></script>
</body>

</html>
