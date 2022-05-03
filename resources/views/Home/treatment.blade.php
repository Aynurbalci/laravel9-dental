@extends('layouts.frontbase')

@section('title', '$data->title')



@section('content')
<section id="featured" class="content-section ">

    <div class="section-content col-md-3">
        <div class="owl-carousel owl-theme">
@foreach ($iamges as $rs)
    

            <div class="item">
                <div class="image">
                    <img src="{{ \Illuminate\Support\Facades\Storage::url($rs->image) }}" alt="">
                    <div class="featured-button button">
                        <a href="#projects">Continue Reading</a>
                    </div>
                </div>

            </div>
            @endforeach


            </div>
        </div>
    </div>
</section>
@endsection
