@extends('layouts.admin')
@section('title','Category List')


@section('content')

<div class="card">
    <div class="card-body">
        <button type="button" class="btn btn-outline-danger btn-icon-text">
            <a href="{{route('admin.category.create')}}" class="ti-upload btn-icon-prepend" style="text-decoration:none"> Add Category</a>

        </button>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>
                            Id
                        </th>
                        <th>
                           Parent
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                            Image
                        </th>
                        <th>
                            Status
                        </th>
                        <th>
                            Edit
                        </th>
                        <th>
                            Delete
                        </th>
                        <th>
                            Show
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $rs)
                    <tr>
                        <td>{{($rs->id)}}</td>
                        <td>
                            {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}
                        </td>
                        <td>{{($rs->title)}}</td>
                        <td>
                            @if ($rs->image)
                            <img src="images/{{($rs->image)}}" style="height:40px">
                            @endif
                        </td>
                        <td>{{($rs->status)}}</td>
                        <td><a class="btn btn-inverse-primary btn-fw" href="{{route('admin.category.edit',['id'=>$rs->id])}}">Edit</a></td>
                        <td><a class="btn btn-inverse-danger btn-fw" href="{{route('admin.category.destroy',['id'=>$rs->id])}}" onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>
                        <td><a class="btn btn-inverse-success btn-fw" href="{{route('admin.category.show',['id'=>$rs->id])}}">Show</a></td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>




@endsection
@section('footer')
