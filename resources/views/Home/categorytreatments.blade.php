@extends('layouts.home')

@section('title', $category->title . ' Treatments')
1dk
@section('content')
    <div class="row">
        @foreach ($treatments as $rs)
            <div class="col-md-4">
                <div class="box-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="img">
                        <img src="{{ \Illuminate\Support\Facades\Storage::url($rs->image) }}" alt="image">
                    </div>
                    <div class="box-wrap">
                        <div class="title">
                            <a href="{{ route('treatment', ['id' => $rs->id]) }}"> {{$rs->title }}</a>
                        </div>
                        <p class="pdt-10 text-color-title-sidebar">
                            {!! $rs->detail !!}
                        </p>
                        <div class="flat-read-more">
                            <button href="" class="themesflat-button font-default small">
                                <span>Read More<i class="fa fa-arrow-right"></i> </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>



    <br>
    <br><br>
    <br><br>
    <br><br>
    <br>

@endsection
