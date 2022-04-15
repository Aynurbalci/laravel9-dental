@extends('layouts.admin')

@section('title', 'Edit Category :'.$data->title)

@section('content')
<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h3 class="text-center">Edit Category : {{$data->title}}</h3>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="section-block" id="basicform">Edit Category</div>
                        <div class="card">
                            <div class="card-body">
                                <form action="/admin/category/update/{{$data->id}}" method="post">
                                    @csrf

                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Title</label>
                                        <input id="inputText3" type="text" class="form-control" name="title" value="{{$data->title}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Keywords</label>
                                        <input id="inputText3" type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Description</label>
                                        <input id="inputText3" type="text" class="form-control" name="description" value="{{$data->description}}">
                                    </div>

                                    <div class="form-group">
                                        <label>File upload</label>
                                        <input type="file" name="img[]" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                            <span class="input-group-append">
                                            <button class="btn btn-success btn-rounded btn-fw" type="button">Browse</button>
                                                <button  class="btn btn-info btn-rounded btn-fw" type="button">Upload</button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option selected="selected">False</option>
                                            <option>True</option>
                                        </select>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary" type="submit">Update Data</button>
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
