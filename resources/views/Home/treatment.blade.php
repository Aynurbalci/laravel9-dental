@extends('layouts.frontbase')

@section('title', '$data->title')



@section('content')


    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container-fluid">

            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">{{ $data->category->title }}</a></li>
                <li class="breadcrumb-item active">{{ $data->title }}</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Detail Start -->
    <div class="product-detail">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="product-detail-top">
                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <div class="product-slider-single normal-slider">


                                    @foreach ($images as $rs)
                                        <img src="{{ \Illuminate\Support\Facades\Storage::url($rs->image) }}"
                                            alt="Product Image">

                                    @endforeach

                                </div>
                                <div class="product-slider-single-nav normal-slider">

                                    @foreach ($images as $rs)
                                        <div class="slider-nav-img">
                                            <img src="{{ \Illuminate\Support\Facades\Storage::url($rs->image) }}"
                                                alt="Product Image">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="product-content">
                                    @include('home.messages')
                                    <div class="title">
                                        <h2>{{ $data->title }}</h2>
                                    </div>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="price">

                                        <p>${{ $data->price * 1.2 }} <span>${{ $data->price * 5 }}</span></p>
                                    </div>

                                    <div class="quantity">
                                        <h4>Quantity:</h4>
                                        <div class="qty">

                                            <button class="btn-minus"><i class="fa fa-minus"></i></button>

                                            <input type="text" value="1">
                                            <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                    <div class="p-size">
                                        <h4>Size:</h4>
                                        <div class="btn-group btn-group-sm">
                                            <button type="button" class="btn">S</button>
                                            <button type="button" class="btn">M</button>
                                            <button type="button" class="btn">L</button>
                                            <button type="button" class="btn">XL</button>
                                        </div>
                                    </div>
                                    <div class="p-color">
                                        <h4>Color:</h4>
                                        <div class="btn-group btn-group-sm">
                                            <button type="button" class="btn">White</button>
                                            <button type="button" class="btn">Black</button>
                                            <button type="button" class="btn">Blue</button>
                                        </div>
                                    </div>
                                    <div class="action">
                                        <a class="btn" href="#"><i class="fa fa-shopping-cart"></i>Add to
                                            Cart</a>
                                        <a class="btn" href="#"><i class="fa fa-shopping-bag"></i>Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row product-detail-bottom">
                        <div class="col-lg-12">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#description">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#specification">Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#reviews">Reviews</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="description" class="container tab-pane active">
                                    <h4>Treatment description</h4>
                                    <p>
                                        {{ $data->description }}
                                    </p>
                                </div>
                                <div id="specification" class="container tab-pane fade">
                                    <h4>Treatment Details</h4>
                                    <p>
                                        {!! $data->detail !!}
                                    </p>
                                </div>
                                <div id="reviews" class="container tab-pane fade">
                                    @foreach($reviews as $rs)
                                    <div class="reviews-submitted">
                                        <div class="reviewer">
                                            {{ $rs->user->name }}<span>{{ $rs->created_at }}</span></div>
                                        <div class="ratting">
                                            <i class="fa fa-star @if ($rs->rate < 1) -o empty @endif "></i>
                                            <i class="fa fa-star @if ($rs->rate < 2) -o empty @endif "></i>
                                            <i class="fa fa-star @if ($rs->rate < 3) -o empty @endif "></i>
                                            <i class="fa fa-star @if ($rs->rate < 4) -o empty @endif "></i>
                                            <i class="fa fa-star @if ($rs->rate < 5) -o empty @endif "></i>
                                        </div>
                                        <strong>{{ $rs->subject }}</strong>
                                        <p>
                                            {{ $rs->review }}
                                        </p>
                                    </div>
                                    @endforeach

                                    <form action="{{ route('storecomment') }}" method="post">
                                        @csrf
                                        <input class="input" type="hidden" name="treatment_id"
                                            value="{{ $data->id }}" />
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="subject"
                                                    placeholder="Subject">
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <textarea type="text" class="form-control" name="review" placeholder="Your review"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                                        </div>


                                        <h1>Star rating </h1>

                                        <div class="rating">

                                            <input type="radio" name="rate" value="5" id="5"><label for="5">☆</label>
                                            <input type="radio" name="rate" value="4" id="4"><label for="4">☆</label>
                                            <input type="radio" name="rate" value="3" id="3"><label for="3">☆</label>
                                            <input type="radio" name="rate" value="2" id="2"><label for="2">☆</label>
                                            <input type="radio" name="rate" value="1" id="1"><label for="1">☆</label>
                                        </div>
                                        @auth
                                            <div><button class="btn" type="submit">Send Message</button></div>
                                        @else
                                            <a href="/login" class="primary-btn">For Submit Your Review, Please Login</a>
                                        @endauth
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>





    <!-- Footer Bottom End -->

    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assests') }}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('assests') }}/lib/slick/slick.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assests') }}/js/main.js"></script>
@endsection
