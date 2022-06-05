@extends('layouts.admin')

@section('title', 'Edit Treatment :' . $data->title)
@section('head')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet"></script>

@endsection

@section('content')
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center">Editing Treatments : {{ $data->title }}</h3>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="section-block" id="basicform">Edit Treatment</div>
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('admin.treatment.update', ['id' => $data->id]) }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Category</label>
                                            <select class="form-control" name="category_id">
                                               @foreach ($datalist as $rs)
                                                    <option value="{{ $rs->id }}"
                                                        @if ($rs->id == $data->parent_id) selected="selected" @endif>
                                                        {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title) }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Title</label>
                                            <input id="inputText3" type="text" class="form-control" name="title"
                                                value="{{ $data->title }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Keywords</label>
                                            <input id="inputText3" type="text" class="form-control" name="keywords"
                                                value="{{ $data->keywords }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Description</label>
                                            <input id="inputText3" type="text" class="form-control" name="description"
                                                value="{{ $data->description }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Detail</label>
                                            <input id="inputText3" type="text" class="form-control" name="description"
                                                value="{{ $data->detail }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Price</label>
                                            <input id="inputText3" value="{{$data->price}}" type="number" class="form-control" name="price">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Image</label>
                                            <input id="inputText3" type="file" name="image" class="form-control">

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
                                            <button class="btn btn-primary" type="submit">Update Treatment</button>
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
