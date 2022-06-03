@extends('layouts.admin')

@section('title', 'Edit FAQ :' . $data->title)
@section('head')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet"></script>

@endsection

@section('content')
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center">Editing FAQs : {{ $data->title }}</h3>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="section-block" id="basicform">Edit FAQ</div>
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('admin.faq.update', ['id' => $data->id]) }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Question</label>
                                            <input id="inputText3" type="text" class="form-control" name="question"
                                                value="{{ $data->question }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Answer</label>
                                            <input id="inputText3" type="text" class="form-control" name="answer"
                                                value="{{ $data->answer }}">
                                        </div>


                                       <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                <option selected="selected">{{$data->status}}</option>
                                                <option>True</option>
                                                <option>False</option>
                                            </select>
                                        </div>
                                        <div>
                                            <button class="btn btn-primary" type="submit">Update FAQ</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@section('foot')
            <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
            <script>
                $(function(){
                    $('.textarea').summernote()
                })
            </script>

    @endsection
