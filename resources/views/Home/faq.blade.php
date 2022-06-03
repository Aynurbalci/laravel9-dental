@extends('layouts.home')
@section('title','About Us | ' . $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', \Illuminate\Support\Facades\Storage::url($setting->icon))

@section('content')


            <div class="container">
                <div class="text-banner wow fadeInDown">
                    <div class="baner-tittle">
                        <a href="{{ route('home') }}" class="font-raguler">Home </a><a href="{{ route('about') }}"> |
                            About Us</a>
                    </div>
                    <div class="baner-tittle">
                        {!! $setting->aboutus !!}
                    </div>

                </div>
            </div>


    @endsection

