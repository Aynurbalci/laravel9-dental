@extends('layouts.admin')
@section('title', 'Comment & reviews List')


@section('content')

    <div class="card">
        <h2 class="text-left">Comment list</h2>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Treatment</th>
                            <th>Subject</th>
                            <th>Reviews</th>
                            <th>Rate</th>
                            <th>Status</th>

                            <th>Delete</th>
                            <th>Show</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $rs)
                            <tr>
                                <td>{{ $rs->id }}</td>

                                <td>{{ $rs->user->name }}</td>
                                <td><a href="{{route('admin.treatment.show',['id'=>$rs->treatment_id])}}">{{ $rs->treatment->title }}</a></td>
                                <td>{{ $rs->subject }}</td>
                                <td>{{ $rs->review }}</td>
                                <td>{{ $rs->rate }}</td>

                                <td>{{ $rs->status }}</td>

                                <td><a class="btn btn-inverse-danger btn-fw"
                                        href="{{ route('admin.comment.destroy', ['id' => $rs->id]) }}"
                                        onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>
                                <td><a  class="btn btn-inverse-success btn-fw"
                                        href="{{ route('admin.comment.show', ['id' => $rs->id]) }}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">Show</a></td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>




@endsection
@section('footer')
