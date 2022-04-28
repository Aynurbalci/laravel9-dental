@extends('layouts.adminindow')
@section('title', 'Treatment Image Gallery')


@section('content')
    <h3>{{ $treatment->title }}</h3>
    <hr> 
    <form action="{{ route('admin.image.store', ['pid' => $treatment->id]) }}" method="post"
        enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="inputText3" class="col-form-label">Title</label>
        <input id="inputText3" type="text" class="form-control" name="title">
    </div>
    <div class="form-group">
        <label>image</label>
        <input type="file" name="image" class="form-control">
    </div>
    <button class="btn btn-primary" type="submit">Save</button>




    </form>
    <table class="table table-bordered">
        <div class="card">
            <div class="card-header">
                <div class="card-body">
                    <thead>
                        <tr>
                            <th>
                                Id
                            </th>

                            <th>
                                Title
                            </th>
                            <th>
                                Image
                            </th>

                            <th style="width:30px">
                                Update
                            </th>
                            <th>
                                Delete
                            </th>


                        </tr>
                    </thead>
                </div>
            </div>
        </div>
    @endsection
