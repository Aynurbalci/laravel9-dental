@extends('layouts.home')
@section('title', 'User Panel')

@section('content')

    <a href="{{ route('home') }}" class="font-raguler">Home </a><a href="{{ route('contact') }}"> |
        User Panel</a>
    <nav id="mainnav" class="mainnav">

        <ul class="menu">

            <li class="col-md-2">
                <a href="http://127.0.0.1:8001" title="">User Menu</a>
                @include('home.user.usermenu')
            </li>
            <li class="col-md-9">
                <a href="http://127.0.0.1:8001/about" title="">User Panel</a>
                @include('profile.show')
            </li>



        </ul>

    </nav>




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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

@endsection


