@extends('layouts.admin')
@section('title','Category List')


@section('content')


<div class="card-body">
    <h4 class="card-title">Table with contextual classes</h4>
    <p class="card-description">
        Add class <code>.table-{color}</code>
    </p>
    <a href="{{route('admin_category_add')}}">Add</a>
    <div class="table-responsive pt-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        First name
                    </th>
                    <th>
                        Product
                    </th>
                    <th>
                        Amount
                    </th>
                    <th>
                        Deadline
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($datalist as $rs)
                <p> </p>
                <tr class="table-info">
                    <td>
                        {{$rs->id}}
                    </td>
                    <td>
                        {{$rs->parent_id}}
                    </td>
                    <td>
                        {{$rs->title}}
                    </td>
                    <td>
                        {{$rs->status}}
                    </td>
                    <td>
                        Edit
                    </td>
                    <td> <a href="/admin/category/delete/{{$rs->id}}" onclick="return confirm('Delete ! Are you sure?')">Delete </a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>




@endsection
@section('footer')
