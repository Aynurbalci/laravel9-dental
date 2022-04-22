@extends('layouts.admin')
@section('title','Treatment List')


@section('content')

<div class="card">
    <h2 class="text-left">Treatment list</h2>
    <div class="card-body">
        <button type="button" class="btn btn-outline-danger btn-icon-text">
            <a href="{{route('admin.treatment.create')}}" class="ti-upload btn-icon-prepend" style="text-decoration:none"> Add Treatment</a>

        </button>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                       <th>Image Gallery</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $rs)
                    <tr>
                        <td>{{($rs->id)}}</td>
                        <td>
                            {{\App\Http\Controllers\AdminPanel\TreatmentController::getParentsTree($rs, $rs->title)}}
                        </td>
                        <td>{{($rs->title)}}</td>
                        <td>{{$rs->price}}</td>
                        <td>
                            @if ($rs->image)
                            <img src="images/{{($rs->image)}}" style="height:40px">
                            @endif
                        </td>
                        <td>{{($rs->status)}}</td>
                        <td><a class="btn btn-inverse-primary btn-fw" href="{{route('admin.treatment.edit',['id'=>$rs->id])}}">Edit</a></td>
                        <td><a class="btn btn-inverse-danger btn-fw" href="{{route('admin.treatment.destroy',['id'=>$rs->id])}}" onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>


                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>




@endsection
@section('footer')
