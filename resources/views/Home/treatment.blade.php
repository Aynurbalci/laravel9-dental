@extends('layouts.frontbase')

@section('title', $data->title)
@section('description', $data->description)
@section('keywords', $data->keywords)
@section('icon', \Illuminate\Support\Facades\Storage::url($data->icon))

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

@section('content')

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container-fluid">

            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
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
                <div class="col-lg-12">
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
                                    @php
                                        $avg = $data->comment->average('rate');
                                    @endphp

                                    <div class="reviews-submitted">
                                        <div class="reviewer">

                                            <div class="ratting">
                                                <i id="{{ $avg >= 1 ? 'active' : 'star' }}" class="fa fa-star"></i>
                                                <i id="{{ $avg >= 2 ? 'active' : 'star' }}" class="fa fa-star"></i>
                                                <i id="{{ $avg >= 3 ? 'active' : 'star' }}" class="fa fa-star"></i>
                                                <i id="{{ $avg >= 4 ? 'active' : 'star' }}" class="fa fa-star"></i>
                                                <i id="{{ $avg >= 5 ? 'active' : 'star' }}" class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#reviews">{{ number_format($avg, 1) }} /
                                        Review({{ $data->comment->count('id') }}
                                        )</a>
                                    <div class="price">

                                        <p>${{ $data->price * 1.2 }} <span>${{ $data->price * 5 }}</span></p>
                                    </div>
                                    <form action="{{route('randevu.store')}}" method="post">
                                        @csrf
                                        <div>
                                            <input type="hidden" name="id" value="{{$data->id}}">
                                            <label>
                                                Enter Appointment Date
                                                <input type="date" name="date">
                                            </label>
                                            <br>
                                            <label for="appt-time">Choose an appointment time: </label>
                                            <input id="appt-time" type="time" name="time" value="13:30">
                                            <br>
                                            <label name="status">Status: {{ $data->status }}</label>
                                            <br>

                                            <br>


                                            <br>

                                            <select class="nav-item dropdown" name="dentist_id">

                                                <option class="nav-link dropdown-toggle" data-toggle="dropdown"
                                                        aria-expanded="false" value="0">Choose Doctor
                                                </option>
                                                @foreach($users as $us)
                                                    @foreach($us->roles as $role)
                                                        @if($role->name=='doctor')
                                                            <option class="nav-link dropdown-toggle"
                                                                    data-toggle="dropdown"
                                                                    aria-expanded="false"
                                                                    value="{{$us->id}}">{{$us->name}}</option>
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                            </select>


                                        </div>


                                        <div class="action">

                                            <button class="btn" type="submit"><i class="bi bi-cart-plus"></i>
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
                                            </button>
                                        </div>
                                    </form>
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
                                    <a class="nav-link" data-toggle="pill"
                                       href="#reviews">Reviews({{ $data->comment->count('id') }}) </a>
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
                                    @foreach ($reviews as $rs)
                                        <div class="reviews-submitted">
                                            <div class="reviewer">
                                                {{ $rs->user->name }}<span>{{ $rs->created_at }}</span></div>
                                            <div class="ratting">
                                                <i id="{{ $rs->rate >= 1 ? 'active' : 'star' }}"
                                                   class="fa fa-star"></i>
                                                <i id="{{ $rs->rate >= 2 ? 'active' : 'star' }}"
                                                   class="fa fa-star"></i>
                                                <i id="{{ $rs->rate >= 3 ? 'active' : 'star' }}"
                                                   class="fa fa-star"></i>
                                                <i id="{{ $rs->rate >= 4 ? 'active' : 'star' }}"
                                                   class="fa fa-star"></i>
                                                <i id="{{ $rs->rate >= 5 ? 'active' : 'star' }}"
                                                   class="fa fa-star"></i>
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
                                               value="{{ $data->id }}"/>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="subject"
                                                       placeholder="Subject">
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <textarea type="text" class="form-control" name="review"
                                                      placeholder="Your review"></textarea>
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
                                            <div>
                                                <button class="btn" type="submit">Send Message</button>
                                            </div>
                                        @else
                                            <a href="/login" class="primary-btn">For Submit Your Review, Please
                                                Login</a>
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
