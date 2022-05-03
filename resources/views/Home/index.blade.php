@extends('layouts.home')

@section('title', 'Laravel Dental Appointment Site')
@section('description')
    Aynur's Dental Hospital Appointment System System
@endsection
@section('keywords', 'dentist,appointment,dental,hospital,teeth')


@section('content')


    <section id="team" class="">

        @include('home._slider')
        <!-- =============== container =============== -->
        <div class="container">
            <div class="row">
                <div class="title col-md-12">
                    <h2>Our Team</h2>
                    <p>Meet some of our lovely, passionate, positive people.</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInDown animated" data-wow-delay=".1s">
                    <div class="timg"><img src="{{ asset('assests') }}/img/team-img1.jpg" /></div>
                    <div class="t-box">
                        <h3>MOHD SUBHAN</h3>
                        <span>Creative Director </span>
                        <ul class="social-links">
                            <li><a class="wow fadeInUp animated" href="index.html#"><i class="fa fa-facebook"></i></a></li>
                            <li><a data-wow-delay=".1s" class="wow fadeInUp animated" href="index.html#"><i
                                        class="fa fa-twitter"></i></a></li>
                            <li><a data-wow-delay=".2s" class="wow fadeInUp animated" href="index.html#"><i
                                        class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp animated" data-wow-delay=".2s">
                    <div class="timg"><img src="{{ asset('assests') }}/img/team-img2.jpg" /></div>
                    <div class="t-box">
                        <h3>Mohd Rahman</h3>
                        <span>Website & ui designer</span>
                        <ul class="social-links">
                            <li><a class="wow fadeInUp animated" href="{{ asset('assests') }}/index.html#"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li><a data-wow-delay=".1s" class="wow fadeInUp animated" href="index.html#"><i
                                        class="fa fa-twitter"></i></a></li>
                            <li><a data-wow-delay=".2s" class="wow fadeInUp animated"
                                    href="{{ asset('assests') }}/index.html#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInDown animated" data-wow-delay=".3s">
                    <div class="timg"><img src="{{ asset('assests') }}/img/team-img3.jpg" /></div>
                    <div class="t-box">
                        <h3>ZEENAT SUBHAN</h3>
                        <span>Senior Developer</span>
                        <ul class="social-links">
                            <li><a class="wow fadeInUp animated" href="{{ asset('assests') }}/index.html#"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li><a data-wow-delay=".1s" class="wow fadeInUp animated"
                                    href="{{ asset('assests') }}/index.html#"><i class="fa fa-twitter"></i></a></li>
                            <li><a data-wow-delay=".2s" class="wow fadeInUp animated"
                                    href="{{ asset('assests') }}/index.html#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp animated" data-wow-delay=".4s">
                    <div class="timg"><img src="{{ asset('assests') }}/img/team-img4.jpg" /></div>
                    <div class="t-box">
                        <h3>MOHD SAIF</h3>
                        <span>Content Writer</span>
                        <ul class="social-links">
                            <li><a class="wow fadeInUp animated" href="index.html#"><i class="fa fa-facebook"></i></a></li>
                            <li><a data-wow-delay=".1s" class="wow fadeInUp animated"
                                    href="{{ asset('assests') }}/index.html#"><i class="fa fa-twitter"></i></a></li>
                            <li><a data-wow-delay=".2s" class="wow fadeInUp animated"
                                    href="{{ asset('assests') }}/index.html#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- =============== container end =============== -->
    </section>

    <!-- =============== for box =============== -->
    <section class="for-box">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 wow rotateInDownLeft animated" data-wow-delay=".1s">
                    <div class="for-box-crecl">
                        <i class="fa fa-home"></i>
                    </div>
                    <div class="clr1">
                        <h2>
                            WEB<br />DESIGN
                        </h2>
                    </div>
                    <div class="wbox">
                        <strong>sorem ipsum </strong>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum ac vehicula leo dulam
                            nullam rhoncus tortor at dignissim vehicula.</p>
                        <a href="#" class="clr1-a">+</a>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow rotateInDownLeft animated" data-wow-delay=".2s">
                    <div class="for-box-crecl">
                        <i class="fa fa-code"></i>
                    </div>
                    <div class="clr2">
                        <h2>
                            WEB<br />DEVELOMENT
                        </h2>
                    </div>
                    <div class="wbox">
                        <strong>sorem ipsum </strong>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum ac vehicula leo dulam
                            nullam rhoncus tortor at dignissim vehicula.</p>
                        <a href="#" class="clr2-a">+</a>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow rotateInDownRight animated" data-wow-delay=".3s">
                    <div class="for-box-crecl">
                        <i class="fa fa-rocket"></i>
                    </div>
                    <div class="clr3">
                        <h2>
                            PRINT<br />DESING
                        </h2>
                    </div>
                    <div class="wbox">
                        <strong>sorem ipsum </strong>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum ac vehicula leo dulam
                            nullam rhoncus tortor at dignissim vehicula.</p>
                        <a href="#" class="clr3-a">+</a>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow rotateInDownRight animated" data-wow-delay=".4s">
                    <div class="for-box-crecl">
                        <i class="fa fa-wifi"></i>
                    </div>
                    <div class="clr4">
                        <h2>
                            ONLINE<br />MARKITING
                        </h2>
                    </div>
                    <div class="wbox">
                        <strong>sorem ipsum </strong>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum ac vehicula leo dulam
                            nullam rhoncus tortor at dignissim vehicula.</p>
                        <a href="#" class="clr4-a">+</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- =============== Counter =============== -->
    <section class="counter">
        <!-- =============== container =============== -->
        <div class="container">
            <div class="row">
                <div class="title col-md-12">
                    <h2>we are awesome, check some interesting facts</h2>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2 wow fadeInUp animated" data-wow-delay=".1s">
                    <i class="fa fa-clock-o size"></i>
                    <h2>522</h2>
                    <span>Hour of Work</span>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2 wow fadeInUp animated" data-wow-delay=".2s">
                    <i class="fa fa-coffee size"></i>
                    <h2>888</h2>
                    <span>Cup of Coffee</span>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2 wow fadeInUp animated" data-wow-delay=".3s">
                    <i class="fa fa-trophy size"></i>
                    <h2>11</h2>
                    <span>Awards Won</span>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2 wow fadeInUp animated" data-wow-delay=".4s">
                    <i class="fa fa-code size"></i>
                    <h2>55566</h2>
                    <span>Line of Code</span>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2 wow fadeInUp animated" data-wow-delay=".5s">
                    <i class="fa fa-globe size"></i>
                    <h2>133</h2>
                    <span>Clients Worldwide</span>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2 wow fadeInUp animated" data-wow-delay=".6s">
                    <i class="fa fa-rocket size"></i>
                    <h2>77</h2>
                    <span>Projects Delivered</span>
                </div>
            </div>
        </div>
        <!-- =============== container end =============== -->
    </section>


    <section id="blog" class="">
        <!-- =============== container =============== -->
        <div class="container">
            <div class="row">
                <div class="title col-md-12">
                    <h2>Our Blog</h2>
                    <p>Meet some of our lovely, passionate, positive people.</p>
                </div>

                @foreach ($productlist1 as $rs)
                    <div class="col-xs-12 col-sm-4 col-md-4 wow fadeInUp animated" data-wow-delay=".1s">
                        <div class="blog-img">
                            <img src="{{ \Illuminate\Support\Facades\Storage::url($rs->image) }}"
                                style="weight:50px; height:200px;" />
                        </div>
                        <div class="row">
                            <div class="data">30</div>
                            <div class="month">March</div>
                        </div>
                        <div class="row">
                            <h3>Travelling with kids Quensland Capricorn Coast</h3>
                            <p>{{ $rs->detail }}</p>
                            <a href="">MORE</a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <!-- =============== container end =============== -->
    </section>
    <div class="recent-product product">
        <div class="container-fluid">
            <div class="section-header">
                <h1>Recent Product</h1>
            </div>
            <div class="row align-items-center product-slider product-slider-4">
                <div class="col-lg-3">
                    <div class="product-item">
                        <div class="product-title">
                            <a href="#">Product Name</a>
                            <div class="ratting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="product-image">
                            <a href="product-detail.html">
                                <img src="img/product-6.jpg" alt="Product Image">
                            </a>
                            <div class="product-action">
                                <a href="#"><i class="fa fa-cart-plus"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                                <a href="#"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="product-price">
                            <h3><span>$</span>99</h3>
                            <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product-item">
                        <div class="product-title">
                            <a href="#">Product Name</a>
                            <div class="ratting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="product-image">
                            <a href="product-detail.html">
                                <img src="img/product-7.jpg" alt="Product Image">
                            </a>
                            <div class="product-action">
                                <a href="#"><i class="fa fa-cart-plus"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                                <a href="#"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="product-price">
                            <h3><span>$</span>99</h3>
                            <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product-item">
                        <div class="product-title">
                            <a href="#">Product Name</a>
                            <div class="ratting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="product-image">
                            <a href="product-detail.html">
                                <img src="img/product-8.jpg" alt="Product Image">
                            </a>
                            <div class="product-action">
                                <a href="#"><i class="fa fa-cart-plus"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                                <a href="#"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="product-price">
                            <h3><span>$</span>99</h3>
                            <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product-item">
                        <div class="product-title">
                            <a href="#">Product Name</a>
                            <div class="ratting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="product-image">
                            <a href="product-detail.html">
                                <img src="img/product-9.jpg" alt="Product Image">
                            </a>
                            <div class="product-action">
                                <a href="#"><i class="fa fa-cart-plus"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                                <a href="#"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="product-price">
                            <h3><span>$</span>99</h3>
                            <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product-item">
                        <div class="product-title">
                            <a href="#">Product Name</a>
                            <div class="ratting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="product-image">
                            <a href="product-detail.html">
                                <img src="img/product-10.jpg" alt="Product Image">
                            </a>
                            <div class="product-action">
                                <a href="#"><i class="fa fa-cart-plus"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                                <a href="#"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="product-price">
                            <h3><span>$</span>99</h3>
                            <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('assests')}}/lib/easing/easing.min.js"></script>
  <script src="{{ asset('assests')}}/lib/slick/slick.min.js"></script>

  <!-- Template Javascript -->
  <script src="{{ asset('assests')}}/js/main.js"></script>

@endsection
