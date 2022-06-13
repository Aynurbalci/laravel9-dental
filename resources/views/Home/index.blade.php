@extends('layouts.home')

@section('title', 'Dental Appointment System')
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', \Illuminate\Support\Facades\Storage::url($setting->icon))
@section('head')
    <style>
        i#star {
            color: black;
        }

        i#active {
            color: yellow;
        }

    </style>
@endsection




@section('slider')
    @include('home._slider')
@endsection
@section('content')

    <section class="fl-row intro-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="box-intro-top">
                        <div class="box-features-intro">
                            <div class="themesflat-spacer clearfix" data-desktop="35" data-mobile="35"
                                 data-smobile="35"></div>
                            <div class="features-intro-top wow fadeInDown">
                                <img src="{{ asset('assests') }}/dent/assets/image/common/MaskGroup9.webp" alt="image">
                                <div class="features-inner">
                                    <img src="{{ asset('assests') }}/dent/assets/image/pattern/Path18193.webp"
                                         alt="image">
                                </div>
                            </div>
                            <div class="themesflat-spacer clearfix" data-desktop="20" data-mobile="20"
                                 data-smobile="20"></div>
                        </div>
                        <div class="box-content-intro">
                            <div class="themesflat-spacer clearfix" data-desktop="87" data-mobile="70"
                                 data-smobile="50"></div>
                            <h3 class="heading">
                                WHAT WE DO
                            </h3>
                            <div class="title-heading wow fadeInUp">
                                True Healthcare For<br> Your Family
                            </div>
                            <div class="themesflat-spacer clearfix" data-desktop="15" data-mobile="15"
                                 data-smobile="15"></div>
                            <div class="row-content-intro wow fadeInUp">
                                <div class="cl-content-intro">
                                    <div class="box-icon">
                                        <i class="icon-Path-18154 font-size-big"></i>
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="28" data-mobile="28"
                                         data-smobile="28"></div>
                                    <h3><a>Quality Control System</a></h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                    </p>
                                </div>
                                <div class="cl-content-intro">
                                    <div class="box-icon">
                                        <i class="icon-Path-18158 font-size-big"></i>
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="28" data-mobile="28"
                                         data-smobile="28"></div>
                                    <h3><a>Highly Professional Staff</a></h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                    </p>
                                </div>
                            </div>
                            <div class="themesflat-spacer clearfix" data-desktop="45" data-mobile="45"
                                 data-smobile="20"></div>
                            <div class="box-button">
                                <a href="{{ route('randevu.index') }}"
                                   class="themesflat-button bg-accent btn-header"><span>Get Appointment</span></a>
                            </div>
                            <div class="themesflat-spacer clearfix" data-desktop="78" data-mobile="70"
                                 data-smobile="50"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="fl-row intro-bot">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="box-wrap-title fl-st-title  wow fadeInDown">
                        <h3 class="heading text-color-white">
                            WHAT WE DO
                        </h3>
                        <div class="title-heading text-color-white">
                            What You Can Do<br> with carenow
                        </div>
                        <p class="text-color-white">The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax
                            quiz prog. Junk MTV quiz graced by fox whelps</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="box-features-bot">
                        <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="40"
                             data-smobile="40"></div>
                        <img class="flat-img-intro"
                             src="{{ asset('assests') }}/dent/assets/image/common/MaskGroup10.webp" alt="image">
                        <div class="features-bot-inner">
                            <img src="{{ asset('assests') }}/dent/assets/image/pattern/Ellipse989.webp" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fl-row features">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="box-features wow fadeInUp">
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0"
                             data-smobile="40"></div>
                        <div class="col-box">
                            <div class="box-icon">
                                <i class="icon-Path-18144 font-size-big"></i>
                            </div>
                            <div class="themesflat-spacer clearfix" data-desktop="38" data-mobile="38"
                                 data-smobile="38"></div>
                            <div class="box-wrap">
                                <h2 class="box-change font-rubik">
                                    <a >
                                        Cosmetic Dentistry
                                    </a>
                                </h2>
                                <p>Your dental filling should feel perfectly fine. Don’t forget that in order to treat your decay, we begin with anesthetic to numb the site of your filling and the tissues that are nearby. So, really, you should feel very little other than some slight pressure as we work on your tooth.

                                </p>
                            </div>
                        </div>
                        <div class="col-box">
                            <div class="box-icon active">
                                <i class="icon-Path-18154 font-size-big"></i>
                            </div>
                            <div class="themesflat-spacer clearfix" data-desktop="38" data-mobile="38"
                                 data-smobile="38"></div>
                            <div class="box-wrap">
                                <h2 class="box-change font-rubik">
                                    <a>
                                        Pediatric Dentistry
                                    </a>
                                </h2>
                                <p>Your dental filling should feel perfectly fine. Don’t forget that in order to treat your decay, we begin with anesthetic to numb the site of your filling and the tissues that are nearby. So, really, you should feel very little other than some slight pressure as we work on your tooth.
                            </div>
                        </div>
                        <div class="col-box">
                            <div class="box-icon">
                                <i class="icon-Path-18174 font-size-big"></i>
                            </div>
                            <div class="themesflat-spacer clearfix" data-desktop="38" data-mobile="38"
                                 data-smobile="38"></div>
                            <div class="box-wrap">
                                <h2 class="box-change font-rubik">
                                    <a>
                                        Dental Implants
                                    </a>
                                </h2>
                                <p>Your dental filling should feel perfectly fine. Don’t forget that in order to treat your decay, we begin with anesthetic to numb the site of your filling and the tissues that are nearby. So, really, you should feel very little other than some slight pressure as we work on your tooth.
                            </div>
                        </div>
                        <div class="col-box bd-none">
                            <div class="box-icon icon-18158">
                                <i class="icon-Path-18158 font-size-big"></i>
                            </div>
                            <div class="themesflat-spacer clearfix" data-desktop="38" data-mobile="38"
                                 data-smobile="38"></div>
                            <div class="box-wrap">
                                <h2 class="box-change font-rubik">
                                    <a>
                                        Teeth Whitening
                                    </a>
                                </h2>
                                <p>Your dental filling should feel perfectly fine. Don’t forget that in order to treat your decay, we begin with anesthetic to numb the site of your filling and the tissues that are nearby. So, really, you should feel very little other than some slight pressure as we work on your tooth.
                            </div>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0"
                             data-smobile="30"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fl-row our-team">
        <div class="container">


            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="box-heading-ot wow fadeInDown">
                        <h3 class="heading text-color-title-sidebar">
                            MEET OUR TREATMENTS
                        </h3>
                        <div class="title-heading text-color-title-sidebar">
                            Meet Our Services
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="owl-carousel owl-theme" data-desktop="3" data-tablet="2" data-mobile="1">
                    @foreach ($treatmentlist1 as  $rs)
                        <div class="item box-item-carousel wow fadeInUp" data-wow-delay="100ms">
                            <img src="{{ \Illuminate\Support\Facades\Storage::url($rs->image) }}" alt="image"
                                 style="min-height:500px; min-weight:100px; max-height:500px; max-weight:100px;">
                            <div class="info">
                                <h2 class="name text-color-title-sidebar"><a
                                        href="{{route('treatment',['id' =>$rs->id])}}">{{$rs->title  }}</a></h2>
                                <p class="pdt-8">like Rate</p>
                                @php
                                    $avg=$rs->comment->average('rate');
                                @endphp
                                <div class="ratting">
                                    <i id="{{$avg >= 1 ? 'active' : 'star' }}" class="fa fa-star"></i>
                                    <i id="{{$avg >= 2 ? 'active' : 'star' }}" class="fa fa-star"></i>
                                    <i id="{{$avg >= 3 ? 'active' : 'star' }}" class="fa fa-star"></i>
                                    <i id="{{$avg >= 4 ? 'active' : 'star' }}" class="fa fa-star"></i>
                                    <i id="{{$avg >= 5 ? 'active' : 'star' }}" class="fa fa-star"></i>
                                    ({{$rs->comment->count('id')}})
                                </div>
                                <a class="btn" href="{{route('treatment',['id' =>$rs->id])}}"><i
                                        class="bi bi-cart-plus"></i>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                                        <path
                                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                    </svg>
                                    Add to treatments
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                         fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                                        <path
                                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                    </svg>
                                </a>
                            </div>

                            <div class="themesflat-spacer clearfix" data-desktop="30" data-mobile="20"
                                 data-smobile="10">

                            </div>
                        </div>
                    @endforeach


                </div>
            </div>

            <div class="row">
                <div class="themesflat-spacer clearfix" data-desktop="120" data-mobile="60" data-smobile="20"></div>
            </div>
        </div>
    </section>

    <section class="fl-row portfolio">
        <div class="container">
            <div class="row">
                <div class="themesflat-spacer clearfix" data-desktop="120" data-mobile="60" data-smobile="50"></div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="wrap-portfolio  wow fadeInDown">
                        <h3 class="heading">
                            PORTFOLIO
                        </h3>
                        <div class="title-heading text-color-title-sidebar">
                            Case Study
                        </div>
                        <p class="text-color-title-sidebar">Right after you leave our practice, you will still have very numb tissues. As a result, you may drool a bit and may have trouble enunciating certain words. The dental filling site will be numb, as well. Since it can be a bit sore when the anesthetic wears off, you may take over-the-counter pain relievers for relief (you won’t need to do this for more than a day or so).</p>
                    </div>
                </div>
                @foreach ($sliderdata as $rs)
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="box-portfolio wow fadeInUp pdbt-30">
                        <img src="{{ \Illuminate\Support\Facades\Storage::url($rs->image) }}" alt="image">
                        <div class="overlay active ">
                            <h4 class="text-color-title-sidebar">
                                {!! $rs->title !!}
                            </h4>
                            <p class="text-color-title-sidebar">
                                {!!$rs->description !!}
                            </p>
                        </div>
                    </div>
                </div>
@endforeach
            </div>
            <div class="row">
                <div class="themesflat-spacer clearfix" data-desktop="90" data-mobile="40" data-smobile="20"></div>
            </div>
        </div>
    </section>

    <section class="fl-row counter">
        <div class="container">
            <div class="row">
                <div class="themesflat-spacer clearfix" data-desktop="120" data-mobile="70" data-smobile="70"></div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="col-counter fl-h1">
                        <div class="themesflat-spacer clearfix" data-desktop="35" data-mobile="35"
                             data-smobile="35"></div>
                        <div class="box">
                            <div class="box-icon active ">
                                <i class="icon-Path-18189 font-size-big"></i>
                            </div>
                            <div class="themesflat-spacer clearfix" data-desktop="15" data-mobile="15"
                                 data-smobile="15"></div>
                            <div class="title-heading text-color-white">
                                <span class="number" data-from="0" data-to="34" data-speed="3000" data-inviewport="yes">34</span><span>+</span>
                            </div>
                            <div class="themesflat-spacer clearfix" data-desktop="5" data-mobile="5"
                                 data-smobile="5"></div>
                            <h4 class="text-color-white font-raguler">Awards Win</h4>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="35" data-mobile="35"
                             data-smobile="35"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="col-counter fl-h1">
                        <div class="themesflat-spacer clearfix" data-desktop="35" data-mobile="35"
                             data-smobile="35"></div>
                        <div class="box">
                            <div class="box-icon active ">
                                <i class="icon-Path-18146 font-size-big"></i>
                            </div>
                            <div class="themesflat-spacer clearfix" data-desktop="15" data-mobile="15"
                                 data-smobile="15"></div>
                            <div class="title-heading text-color-white">
                                <span class="number" data-from="0" data-to="95" data-speed="3000" data-inviewport="yes">95</span><span>K</span>
                            </div>
                            <div class="themesflat-spacer clearfix" data-desktop="5" data-mobile="5"
                                 data-smobile="5"></div>
                            <h4 class="text-color-white font-raguler">Happy Customers</h4>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="35" data-mobile="35"
                             data-smobile="35"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="col-counter fl-h1">
                        <div class="themesflat-spacer clearfix" data-desktop="35" data-mobile="35"
                             data-smobile="35"></div>
                        <div class="box">
                            <div class="box-icon active ">
                                <i class="icon-Path-18167 font-size-big"></i>
                            </div>
                            <div class="themesflat-spacer clearfix" data-desktop="15" data-mobile="15"
                                 data-smobile="15"></div>
                            <div class="title-heading text-color-white">
                                <span class="number" data-from="0" data-to="100" data-speed="3000"
                                      data-inviewport="yes">100</span><span>%</span>
                            </div>
                            <div class="themesflat-spacer clearfix" data-desktop="5" data-mobile="5"
                                 data-smobile="5"></div>
                            <h4 class="text-color-white font-raguler pdl-5">Satisfaction</h4>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="35" data-mobile="35"
                             data-smobile="35"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="col-counter fl-h1">
                        <div class="themesflat-spacer clearfix" data-desktop="35" data-mobile="35"
                             data-smobile="35"></div>
                        <div class="box">
                            <div class="box-icon active ">
                                <i class="icon-Path-18145 font-size-big"></i>
                            </div>
                            <div class="themesflat-spacer clearfix" data-desktop="15" data-mobile="15"
                                 data-smobile="15"></div>
                            <div class="title-heading text-color-white">
                                <span class="number" data-from="0" data-to="10" data-speed="3000" data-inviewport="yes">10</span><span>+</span>
                            </div>
                            <div class="themesflat-spacer clearfix" data-desktop="5" data-mobile="5"
                                 data-smobile="5"></div>
                            <h4 class="text-color-white font-raguler">Years of experience</h4>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="35" data-mobile="35"
                             data-smobile="35"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="themesflat-spacer clearfix" data-desktop="91" data-mobile="50" data-smobile="50"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row-counter">
                        <div class="box-counter-img">
                            <img src="{{ asset('assests') }}/dent/assets/image/common/couter01.webp" alt="image">
                        </div>
                        <div class="box-counter-wrap">
                            <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0"
                                 data-smobile="30"></div>
                            <div class="wrap-counter fl-st-title">
                                <div class="title-heading">
                                    True Healthcare For<br> Your Family
                                </div>
                                <p class="text-color-white">
                                    The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk
                                    MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad
                                    nymph, for quick jigs vex
                                </p>
                            </div>
                            <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0"
                                 data-smobile="30"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fl-row process">
        <div class="container">
            <div class="row">
                <div class="themesflat-spacer clearfix" data-desktop="120" data-mobile="70" data-smobile="70"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="box-heading-process text-center">
                        <h3 class="heading  wow fadeInUp">
                            WORK PROCESS
                        </h3>
                        <div class="title-heading text-color-title-sidebar wow fadeInUp">
                            We Complete Every<br> Step Carefully
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="themesflat-spacer clearfix" data-desktop="20" data-mobile="20" data-smobile="20"></div>
            </div>
            <div class="row">
                @foreach ($sliderdata as $rs)

                    <div class="col-lg-4">
                        <div class="col-process">
                            <div class="box-process wow fadeInUp">
                                <div class="feature-process">
                                    <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="40"
                                         data-smobile="40"></div>
                                    <img src="{{ \Illuminate\Support\Facades\Storage::url($rs->image) }}" alt="image">
                                </div>
                                <div class="box-wrap pdt-30">
                                    <h2>
                                        {!! $rs->title !!}
                                    </h2>
                                    <p class="text-color-title-sidebar">
                                        {!!$rs->description !!}
                                    </p>
                                    <div class="flat-read-more">
                                        <a href="{{route('treatment',['id' =>$rs->id])}}"
                                           class="themesflat-button font-default process">
                                            <span>Read More<i class="fa fa-arrow-right"></i> </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="row">
                <div class="themesflat-spacer clearfix" data-desktop="110" data-mobile="50" data-smobile="40"></div>
            </div>
        </div>
    </section>
    <section class="fl-row contact-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="fl-box-contact">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d107128.50620412633!2d73.79407294238727!3d32.95719168921971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1624430719262!5m2!1svi!2s" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>
                        <div class="form-contact-us fl-st-title">
                            <div class="themesflat-spacer clearfix" data-desktop="113" data-mobile="70" data-smobile="70"></div>
                            <h3 class="heading theme-color">
                                CONTACT US
                            </h3>
                            <div class="title-heading text-color-white">
                                Have Questions?<br> Get in Touch!
                            </div>
                            <div class="themesflat-spacer clearfix" data-desktop="18" data-mobile="18" data-smobile="18"></div>
                            @include('home.messages')
                            <form class="content-form wow fadeInUp" id="checkout-form"
                                  action="{{route("storemessage")}}" method="post"
                                  accept-charset="utf-8" novalidate="novalidate" style="visibility: visible; animation-name: fadeInUp;">
                                @csrf
                                <h1>Contact Area</h1>
                                <div class="row">
                                    <div class="col">
                                        <input tabindex="1" id="name" name="name" value="" class="input-contact" type="text"
                                               placeholder="Name & Surname" required="">
                                    </div>
                                    <div class="col">
                                        <input tabindex="2" id="tel" name="tel" value="" class="input-contact" type="text"
                                               placeholder="Phone Number" required="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input type="email" tabindex="3" id="email" name="email" value="" class="input-contact"
                                               placeholder="Email Address" required="">
                                    </div>
                                    <div class="col">
                                        <input type="text" tabindex="4" id="subject" name="subject" value="" class="form-control"
                                               placeholder="Subject">
                                    </div>
                                </div>
                                <div>
                                    <textarea name="message" type="text"  placeholder="Your Message" maxlength="1000"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="box-submit">
                                            <input name="submit" id="submit" type="submit" class="themesflat-button bg-accent btn-submit"
                                                   value="Send Message"  >
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <img src="assets/image/pattern/Ellipse924.webp" alt="image" class="img-box-1">
                            <img src="assets/image/thumbnails/logocontact.webp" alt="image" class="img-box-2">
                            <div class="themesflat-spacer clearfix" data-desktop="106" data-mobile="40" data-smobile="40"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="fl-row articles">
        <div class="container">
            <div class="row">
                <div class="themesflat-spacer clearfix" data-desktop="120" data-mobile="70" data-smobile="70"></div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="box-wrap-article">
                        <h3 class="heading text-center">
                            LATEST NEWS
                        </h3>
                        <div class="title-heading text-color-title-sideba text-center">
                          Our Doctors
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="owl-carousel owl-theme none latest-box cursor-resize" data-margin="30" data-desktop="3"
                     data-tablet="2" data-mobile="1">
                    <div class="box-article">
                        <div class="item wow fadeInUp">
                            <div class="feature-post">
                                <img src="{{ asset('assests') }}/dent/assets/image/common/doctor02.webp" alt="image">
                                <div class="overlay-post"></div>
                            </div>
                            <div class="content-post art">
                                <ul class="meta">
                                    <li class="author">
                                        <a>DENTAL</a>
                                    </li>
                                    <li class="day-post">
                                        <a>APR 21, 2020</a>
                                    </li>
                                </ul>
                                <h2 class="title text-color-title-sidebar">
                                    <a >Mauris neque nisiibus non elementum</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="box-article">
                        <div class="item wow fadeInUp" data-wow-duration="1s" data-wow-delay="100ms">
                            <div class="feature-post">
                                <img src="{{ asset('assests') }}/dent/assets/image/common/doctor03.webp" alt="image">
                                <div class="overlay-post"></div>
                            </div>
                            <div class="content-post  art">
                                <ul class="meta">
                                    <li class="author">
                                        <a>DENTAL</a>
                                    </li>
                                    <li class="day-post">
                                        <a >APR 21, 2020</a>
                                    </li>
                                </ul>
                                <h2 class="title text-color-title-sidebar">
                                    <a >Donec dapibus mauris id odio ornare tempus</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="box-article">
                        <div class="item wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="200ms">
                            <div class="feature-post">
                                <img src="{{ asset('assests') }}/dent/assets/image/common/doctor01.webp" alt="image">
                                <div class="overlay-post"></div>
                            </div>
                            <div class="content-post art">
                                <ul class="meta">
                                    <li class="author">
                                        <a >DENTAL</a>
                                    </li>
                                    <li class="day-post">
                                        <a >APR 21, 2020</a>
                                    </li>
                                </ul>
                                <h2 class="title text-color-title-sidebar">
                                    <a >Quisque suscipit ipsum est, eu venenatis leo</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="themesflat-spacer clearfix" data-desktop="232" data-mobile="150" data-smobile="70"></div>
            </div>

        </div>
    </section>

@endsection
