@extends('layouts.admin')

@section('title', 'Add Treatment')

@section('content')
<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h3 class="text-center">Add Category : </h3>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="section-block" id="basicform">Add Category</div>
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('admin.treatment.store')}}" method="post" enctype="multipart/form-data" >
                                    @csrf

                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Parent</label>
                                        <select class="form-control" name="parent_id">
                                            <option value="0" selected="selected">Main category</option>
                                            @foreach($data as $rs)
                                                <option value="{{$rs->id}}"> {{\App\Http\Controllers\AdminPanel\TreatmentController::getParentsTree($rs, $rs->title)}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Title</label>
                                        <input id="inputText3" type="text" class="form-control" name="title" placeholder="Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Keywords</label>
                                        <input id="inputText3" type="text" class="form-control" name="keywords" placeholder="Keywords"> >
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Description</label>
                                        <input id="inputText3" type="text" class="form-control" name="description" placeholder="Description">>
                                    </div>

                                    <div class="form-group">
                               <label>image</label>
                               <input type="file" name="image" class="form-control">
                                        </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option selected="selected">False</option>
                                            <option>True</option>
                                        </select>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary" type="submit">Save</button>
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
