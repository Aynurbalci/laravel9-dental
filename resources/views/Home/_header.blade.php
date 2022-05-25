<header class="header downscrolled clearfix">
    <div id="header">
        <div id="site-header">
            <div class="logo">
                <a href="index-2.html">
                    <img src="{{ asset('assests') }}/dent/assets/image/LogoDark.webp" alt="image">
                </a>
            </div>
            @php
                $mainCategories = \App\Http\Controllers\HomeController::maincategorylist();
            @endphp
            <div class="nav-wrap">
                <nav id="mainnav" class="mainnav">

                    <ul class="menu">
                        <li class="menu-item-has-children">
                            <a href="about-us.html" title="">Categories</a>
                            <ul class="sub-menu">
                                @foreach ($mainCategories as $rs)
                                    @if (count($rs->children))
                                        <li><a href="#">{{ $rs->title }}</a>
                                            <ul class="children">
                                                @include('home.categorytree', ['children' => $rs->children])
                                            </ul>
                                        </li>
                                    @else
                                        <li><a href="#">{{ $rs->title }}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('home') }}" title="">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}" title="">About Us</a>
                        </li>
                        <li>
                            <a href="{{ route('references') }}" title="">References</a>
                        </li>
                        <li >
                            <a href="{{ route('references') }}" title="">Services</a>



                        </li>
                        <li>
                            <a href="{{ route('contact') }}" title="">Contact</a>
                        </li>

                        <li class="menu-item-has-children">
                            <a href="blog-standard.html" title="">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog-standard.html" title="">Blog Standard</a></li>
                                <li><a href="blog-details.html" title="">Blog Details</a></li>
                            </ul>

                        </li>


                    </ul>

                </nav>
            </div>

            <div class="contact">
                <div class="top-bar-right">
                    <div class="call-us">
                        <div class="icon-call-us"></div>
                        <div class="content-call-us">
                            <p>Call Us</p>
                            <a href="tel:360-779-2228" class="font-bold text-color-title-sidebar">360-779-2228</a>
                        </div>
                    </div>
                    <div class="button-header">
                        <a href="book-appointment.html" class="themesflat-button bg-accent btn-header"><span>Get
                                Appointment</span></a>
                    </div>
                </div>
            </div>
            <div class="btn-menu">
                <span></span>
            </div>
        </div>
    </div>
</header>
