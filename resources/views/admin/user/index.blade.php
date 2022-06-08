@extends('layouts.admin')
@section('title', 'User List')


@section('content')

    <div class="card">
        <h2 class="text-left">User list</h2>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>

                            <th>Delete</th>
                            <th>Show</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $rs)
                            <tr>
                                <td>{{ $rs->id }}</td>

                                <td>{{ $rs->name }}</td>

                                <td>{{ $rs->email }}</td>
                                <td>
                                    @foreach($rs->roles as $role)
                                        {{$role->name}}

                                        @endforeach

                                </td>
                                <td>{{ $rs->status }}</td>



                                <td><a class="btn btn-inverse-danger btn-fw"
                                        href="{{ route('admin.user.destroy', ['id' => $rs->id]) }}"
                                        onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>
                                <td><a  class="btn btn-inverse-success btn-fw"
                                        href="{{ route('admin.user.show', ['id' => $rs->id]) }}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">Show</a></td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>




@endsection
@section('footer')
