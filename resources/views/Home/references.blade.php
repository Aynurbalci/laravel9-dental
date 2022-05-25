@extends('layouts.home')
@section('title','References | ' . $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', \Illuminate\Support\Facades\Storage::url($setting->icon))

@section('content')


            <div class="container">
                <div class="text-banner wow fadeInDown">
                    <div class="baner-tittle">
                        <a href="{{ route('home') }}" class="font-raguler">Home </a><a href="{{ route('references') }}"> |
                            References</a>
                    </div>

                        {!! $setting->references !!}
<br>

                </div>
            </div>


    @endsection

