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
