@extends('layouts.admin')
@section('title','Category List')


@section('content')

<div class="card">
    <div class="card-body">
        <h4 class="card-title">Striped Table</h4>
        <p class="card-description">
            Add class <code>.table-striped</code>
        </p>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>
                            Id
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                            Keywords
                        </th>
                        <th>
                            Description
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
                        <td>{{($rs->title)}}</td>
                        <td>{{($rs->keywords)}}</td>
                        <td>{{($rs->description)}}</td>
                        <td>{{($rs->imagine)}}</td>
                        <td>{{($rs->status)}}</td>
                        <td><a class="btn btn-inverse-primary btn-fw" href="/admin/category/edit/{{($rs->id)}}/">Edit</a></td>
                        <td><a class="btn btn-inverse-danger btn-fw" href="/admin/category/delete/{{($rs->id)}}/">Delete</a></td>
                        <td><a class="btn btn-inverse-success btn-fw" href="/admin/category/show/{{($rs->id)}}/">Show</a></td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>




@endsection
@section('footer')
