@extends('layouts.home')
@section('title', 'Contact | ' . $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', \Illuminate\Support\Facades\Storage::url($setting->icon))

@section('content')


    <div class="container">
        <div class="text-banner wow fadeInDown">
            <div class="baner-tittle">
                <a href="{{ route('home') }}" class="font-raguler">Home </a><a href="{{ route('contact') }}"> |
                    Contact</a>
            </div>
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
            {!! $setting->contact !!}


        </div>
    </div>



@endsection
