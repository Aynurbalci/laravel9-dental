@extends('layouts.home')
@section('title','Frequently Asked Questions | ' . $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', \Illuminate\Support\Facades\Storage::url($setting->icon))
@section('head')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

@endsection


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
<div id="accordion">
                       @foreach($datalist as $rs)
                       <div class="card">
                        <div class="card-header">
                          <a class="card-link" data-toggle="collapse" href="#collapse{{$loop->iteration  }}">
                           <h3>{{$rs->question}}</h3>
                        </a>
                    </div>

                            <div id="collapse{{$loop->iteration  }}" class="collapse @once show @endonce" data-parent="#accordion">
                                <div class="card-body">
                           {!!$rs->answer!!}
                        </div>
                            </div>
                           @endforeach
                        </div>
                    </div>

                </div>
            </div>


@endsection

