@extends('layouts.home')

@section('title',$category->title . ' Treatments')


@section('content')

    <li class="active">   {{$category->title}}</li>

    <div class="row">



        <div class="col-lg-4">
            @foreach($treatments as $rs)
            <div class="col-process">

                <div class="box-process wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">

                    <div class="feature-process">


                        <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="40" data-smobile="40" style="height:40px"></div>
                        <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="image">
                    </div>
                    <div class="box-wrap pdt-30">

                        <h2>
                            {{$rs->title}}
                        </h2>
                        <p class="text-color-title-sidebar">
{{$rs->detail}}
                        </p>
                        <div class="flat-read-more">
                            <a href="{{route('product',['id'=>$rs->id])}}" class="themesflat-button font-default process">
                                <span>Read More<i class="fa fa-arrow-right"></i> </span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>






    </div>
    <br>
    <br><br>
    <br><br>
    <br><br>
    <br>

@endsection


