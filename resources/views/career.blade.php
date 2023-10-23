@extends('layouts.app')
@section('content')
@section('css')
<style>
    .masthead-entry-3 {
        background-image: url("/assets/img/bg/developer-hub.jpg") !important;
    }
</style>
@endsection
<div class="masthead">
    <div class="masthead-entry-3 text-right parallax" data-stellar-background-ratio="0.3">
        <div class="inner rel-1">
            <div class="container">
                <h1 class="wow fadeInUp">Ignite Your Developer journey by Diving into Astech Hub's World of Opportunities</h1>
            </div>
            <div class="entry-line"></div>
        </div>
    </div>
</div>
<section id="get-start" class="get-start masked text-white text-center" data-stellar-background-ratio="0.4">
    <div class="container rel-1">
        <h2 class="text-white wow fadeInDown">Career Opportunities Will be posted here</h2>
        {{-- <div class="promo-subtitle wow fadeInUp">
            <p>Awesome Theme for Wordpress</p>
        </div> --}}
        <div class="inline-buttons">
            <div class="row-base">
                <a href="#" class="col-base btn-lead btn-red btn wow fadeInLeft">
                    <span class="text">Get started</span>
                    <span class="flip-front">Get started</span>
                    <span class="flip-back">Register</span>
                </a>
                <a href="#" class="col-base btn-lead btn-b-white btn wow fadeInRight">
                    <span class="text">Login</span>
                    <span class="flip-front">Login</span>
                    <span class="flip-back">Continue Your Journey</span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
