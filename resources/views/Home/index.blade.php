@extends('layouts.home')

@section('title','Laravel Dental Appointment Site')
@section('description')
Aynur's Dental Hospital Appointment System System
@endsection
@section('keywords','dentist,appointment,dental,hospital,teeth')


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
                <div class="timg"><img src="{{ asset('assests')}}/img/team-img1.jpg" /></div>
                <div class="t-box">
                    <h3>MOHD SUBHAN</h3>
                    <span>Creative Director </span>
                    <ul class="social-links">
                        <li><a class="wow fadeInUp animated" href="index.html#"><i class="fa fa-facebook"></i></a></li>
                        <li><a data-wow-delay=".1s" class="wow fadeInUp animated" href="index.html#"><i class="fa fa-twitter"></i></a></li>
                        <li><a data-wow-delay=".2s" class="wow fadeInUp animated" href="index.html#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp animated" data-wow-delay=".2s">
                <div class="timg"><img src="{{ asset('assests')}}/img/team-img2.jpg" /></div>
                <div class="t-box">
                    <h3>Mohd Rahman</h3>
                    <span>Website & ui designer</span>
                    <ul class="social-links">
                        <li><a class="wow fadeInUp animated" href="{{ asset('assests')}}/index.html#"><i class="fa fa-facebook"></i></a></li>
                        <li><a data-wow-delay=".1s" class="wow fadeInUp animated" href="index.html#"><i class="fa fa-twitter"></i></a></li>
                        <li><a data-wow-delay=".2s" class="wow fadeInUp animated" href="{{ asset('assests')}}/index.html#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInDown animated" data-wow-delay=".3s">
                <div class="timg"><img src="{{ asset('assests')}}/img/team-img3.jpg" /></div>
                <div class="t-box">
                    <h3>ZEENAT SUBHAN</h3>
                    <span>Senior Developer</span>
                    <ul class="social-links">
                        <li><a class="wow fadeInUp animated" href="{{ asset('assests')}}/index.html#"><i class="fa fa-facebook"></i></a></li>
                        <li><a data-wow-delay=".1s" class="wow fadeInUp animated" href="{{ asset('assests')}}/index.html#"><i class="fa fa-twitter"></i></a></li>
                        <li><a data-wow-delay=".2s" class="wow fadeInUp animated" href="{{ asset('assests')}}/index.html#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp animated" data-wow-delay=".4s">
                <div class="timg"><img src="{{ asset('assests')}}/img/team-img4.jpg" /></div>
                <div class="t-box">
                    <h3>MOHD SAIF</h3>
                    <span>Content Writer</span>
                    <ul class="social-links">
                        <li><a class="wow fadeInUp animated" href="index.html#"><i class="fa fa-facebook"></i></a></li>
                        <li><a data-wow-delay=".1s" class="wow fadeInUp animated" href="{{ asset('assests')}}/index.html#"><i class="fa fa-twitter"></i></a></li>
                        <li><a data-wow-delay=".2s" class="wow fadeInUp animated" href="{{ asset('assests')}}/index.html#"><i class="fa fa-google-plus"></i></a></li>
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

<!-- =============== Gallery =============== -->
<section id="Gallery" class="wow flipInX animated" data-wow-delay=".5s">


    <div class="big-demo go-wide" data-js-module="filtering-demo">

        <div class="grid baguetteBoxThree gallery">
            <div class="element-item transition webdesign " data-category="post-transition">
                <a href="{{ asset('assests')}}/img/gallery/emp-1.jpg">
                    <img src="{{ asset('assests')}}/img/gallery/emp-1.jpg" />
                    <div class="hover-img">
                        <h2>Website Design</h2>
                        <i class="fa fa-camera camera"></i>
                    </div>
                </a>
            </div>
            <div class="element-item post-transition ecommerce " data-category="post-transition">
                <a href="{{ asset('assests')}}/img/gallery/emp-2.jpg">
                    <img src="{{ asset('assests')}}/img/gallery/emp-2.jpg" />
                    <div class="hover-img">
                        <h2>E-commerce</h2>
                        <i class="fa fa-camera camera"></i>
                    </div>
                </a>
            </div>
            <div class="element-item post-transition webdesign " data-category="post-transition">
                <a href="{{ asset('assests')}}/img/gallery/emp-3.jpg">
                    <img src="{{ asset('assests')}}/img/gallery/emp-3.jpg" />
                    <div class="hover-img">
                        <h2>Website Design</h2>
                        <i class="fa fa-camera camera"></i>
                    </div>
                </a>
            </div>
            <div class="element-item transition ecommerce " data-category="post-transition">
                <a href="{{ asset('assests')}}/img/gallery/emp-4.jpg">
                    <img src="{{ asset('assests')}}/img/gallery/emp-4.jpg" />
                    <div class="hover-img">
                        <h2>E-commerce</h2>
                        <i class="fa fa-camera camera"></i>
                    </div>
                </a>
            </div>
            <div class="element-item post-transition logo " data-category="post-transition">
                <a href="{{ asset('assests')}}/img/gallery/emp-5.jpg">
                    <img src="{{ asset('assests')}}/img/gallery/emp-5.jpg" />
                    <div class="hover-img">
                        <h2>Logo</h2>
                        <i class="fa fa-camera camera"></i>
                    </div>
                </a>
            </div>
            <div class="element-item post-transition cms " data-category="post-transition">
                <a href="{{ asset('assests')}}/img/gallery/emp-6.jpg">
                    <img src="{{ asset('assests')}}/img/gallery/emp-6.jpg" />
                    <div class="hover-img">
                        <h2>CMS</h2>
                        <i class="fa fa-camera camera"></i>
                    </div>
                </a>
            </div>
            <div class="element-item post-transition logo " data-category="post-transition">
                <a href="{{ asset('assests')}}/img/gallery/emp-7.jpg">
                    <img src="{{ asset('assests')}}/img/gallery/emp-7.jpg" />
                    <div class="hover-img">
                        <h2>Logo</h2>
                        <i class="fa fa-camera camera"></i>
                    </div>
                </a>
            </div>
            <div class="element-item transition cms " data-category="post-transition">
                <a href="{{ asset('assests')}}/img/gallery/emp-8.jpg">
                    <img src="{{ asset('assests')}}/img/gallery/emp-8.jpg" />
                    <div class="hover-img">
                        <h2>CMS</h2>
                        <i class="fa fa-camera camera"></i>
                    </div>
                </a>
            </div>
            <div class="element-item post-transition ecommerce " data-category="post-transition">
                <a href="{{ asset('assests')}}/img/gallery/emp-9.jpg">
                    <img src="{{ asset('assests')}}/img/gallery/emp-9.jpg" />
                    <div class="hover-img">
                        <h2>E-commerce</h2>
                        <i class="fa fa-camera camera"></i>
                    </div>
                </a>
            </div>
            <div class="element-item post-transition webdesign " data-category="post-transition">
                <a href="{{ asset('assests')}}/img/gallery/emp-10.jpg">
                    <img src="{{ asset('assests')}}/img/gallery/emp-10.jpg" />
                    <div class="hover-img">
                        <h2>Web Design</h2>
                        <i class="fa fa-camera camera"></i>
                    </div>
                </a>
            </div>
            <div class="element-item post-transition logo " data-category="post-transition">
                <a href="{{ asset('assests')}}/img/gallery/emp-11.jpg">
                    <img src="{{ asset('assests')}}/img/gallery/emp-11.jpg" />
                    <div class="hover-img">
                        <h2>Logo</h2>
                        <i class="fa fa-camera camera"></i>
                    </div>
                </a>
            </div>
            <div class="element-item transition cms " data-category="post-transition">
                <a href="{{ asset('assests')}}/img/gallery/emp-12.jpg">
                    <img src="{{ asset('assests')}}/img/gallery/emp-12.jpg" />
                    <div class="hover-img">
                        <h2>CMS</h2>
                        <i class="fa fa-camera camera"></i>
                    </div>
                </a>
            </div>
        </div>


    </div>


</section>

<section id="blog" class="">
    <!-- =============== container =============== -->
    <div class="container">
        <div class="row">
            <div class="title col-md-12">
                <h2>Our Blog</h2>
                <p>Meet some of our lovely, passionate, positive people.</p>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 wow fadeInUp animated" data-wow-delay=".1s">
                <div class="blog-img">
                    <img src="{{ asset('assests')}}/img/blog1.JPG" />
                </div>
                <div class="row">
                    <div class="data">30</div>
                    <div class="month">March</div>
                </div>
                <div class="row">
                    <h3>Travelling with kids Quensland Capricorn Coast</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum ac vehicula leo dulam nullam rhoncus tortor at dignissim vehicula.</p>
                    <a href="{{ asset('assests')}}/blog-single.html">MORE</a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 wow bounceIn animated" data-wow-delay=".4s">
                <div class="blog-img">
                    <img src="{{ asset('assests')}}/img/blog2.JPG" />
                </div>
                <div class="row">
                    <div class="data">30</div>
                    <div class="month">March</div>
                </div>
                <div class="row">
                    <h3>Travelling with kids Quensland Capricorn Coast</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum ac vehicula leo dulam nullam rhoncus tortor at dignissim vehicula.</p>
                    <a href="{{ asset('assests')}}/blog-single.html">MORE</a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 wow fadeInDown animated" data-wow-delay=".3s">
                <div class="blog-img">
                    <img src="{{ asset('assests')}}/img/blog3.JPG" />
                </div>
                <div class="row">
                    <div class="data">30</div>
                    <div class="month">March</div>
                </div>
                <div class="row">
                    <h3>Travelling with kids Quensland Capricorn Coast</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum ac vehicula leo dulam nullam rhoncus tortor at dignissim vehicula.</p>
                    <a href="{{ asset('assests')}}/blog-single.html">MORE</a>
                </div>
            </div>
        </div>
    </div>
    <!-- =============== container end =============== -->
</section>



@endsection
