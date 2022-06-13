@extends('layouts.admin')
@section('title', 'Process List')


@section('content')

    <div class="card">
        <h2 class="text-left">Process list</h2>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>User</th>
                            <th>Name & Surname</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Admin Note</th>

                            <th>Delete</th>
                            <th>Show</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $rs)
                            <tr>
                                <td>{{ $rs->id }}</td>


                                <td><a href="{{route('admin.user.show',['id'=>$rs->user_id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">{{ $rs->user->name }}</a></td>

                                <td>{{ $rs->name }}</td>
                                <td>{{ $rs->phone }}</td>

                                <td>{{ $rs->email }}</td>
                                <td>{{ $rs->adress }}</td>
                                <td>{{ $rs->total }}</td>
                                <td>{{ $rs->status }}</td>
                                <td>{{ $rs->note }}</td>

                                <td><a class="btn btn-inverse-danger btn-fw"
                                        href="{{ route('admin.process.cancelprocess', ['id' => $rs->id]) }}"
                                        onclick="return confirm('Cancelling !! Are you sure ?')">Cancel</a></td>
                                <td><a  class="btn btn-inverse-success btn-fw"
                                        href="{{ route('admin.process.show', ['id' => $rs->id]) }}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">Show</a></td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>




@endsection
@section('footer')
