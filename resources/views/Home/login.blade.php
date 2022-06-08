@extends('layouts.home')
@section('title','User Login |')


@section('content')
<div class="container">
    <div class="text-banner wow fadeInDown">
        <div class="baner-tittle">
            <a href="{{ route('home') }}" class="font-raguler">Home </a><a href="{{ route('loginuser') }}"> |
                User Login</a>
        </div>
        <div class="baner-tittle">
            @include('auth.login')
        </div>

    </div>
</div>


@endsection

