@extends('layouts.home')
@section('title','Frequently Asked Questions | ' . $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', \Illuminate\Support\Facades\Storage::url($setting->icon))

@section('content')


            <div class="container">
                <div class="text-banner wow fadeInDown">
                    <div class="baner-tittle">
                        <a href="{{ route('home') }}" class="font-raguler">Home </a><a href="{{ route('about') }}"> |
                            Frequently Asked Questions</a>
                    </div>
                    <div class="section-title">
                        <h1>Frequently Asked Questions</h1>



                    </div>
                    <div class="baner-tittle">

                       @foreach($datalist as $rs)
                           <h3>{{$rs->question}}</h3>
                           <p>{!!$rs->answer!!}</p>
                           @endforeach
                    </div>

                </div>
            </div>


@endsection

