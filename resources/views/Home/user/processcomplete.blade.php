@extends('layouts.home')
@section('title','Order Complete')

@section('content')


            <div class="container">
                <div class="text-banner wow fadeInDown">
                    <div class="baner-tittle">
                        <a href="{{ route('home') }}" class="font-raguler">Home </a><a href="{{ route('about') }}"> |
                            Order Complete</a>
                    </div>
                    <div class="baner-tittle">
                     @include('home.messages')
                    </div>

                </div>
            </div>
<br>
    <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
    @endsection

