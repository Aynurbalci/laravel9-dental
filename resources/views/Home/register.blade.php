@extends('layouts.home')
@section('title','Registration Page |')


@section('content')
<div class="container">
    <div class="text-banner wow fadeInDown">
        <div class="baner-tittle">
            <a href="{{ route('home') }}" class="font-raguler">Home </a><a href="{{ route('registeruser') }}"> |
                User Registration</a>
        </div>
        <div class="baner-tittle">
            @include('auth.register')
        </div>

    </div>
</div>
<br>
<br>
<br>
@endsection

