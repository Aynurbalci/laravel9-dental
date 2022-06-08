@extends('layouts.adminindow')

@section('title', 'User Detail:' .$data->title)

@section('content')
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h1 class="text-center">{{ $data->title }}</h1>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                            <div class="card-body">
                                <h4 class="card-title">User detail Data</h4>

                                <div class="table-responsive pt-3">


                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Id</th>
                                            <td>{{ $data->id }}</td>
                                        </tr>

                                        <tr>
                                            <th>Name & Surname</th>
                                            <td>{{ $data->name }}</td>
                                        </tr>

                                        <tr>
                                            <th>Email</th>
                                            <td>{{ $data->email }}</td>
                                        </tr>
                                        <tr>
                                            <th>Roles</th>
                                            <td> @foreach($data->roles as $role)
                                                    {{$role->name}}

                                                @endforeach</td>
                                           <a  class="btn btn-inverse-success btn-fw"
                                            href="{{ route('admin.user.destroyrole', ['uid' => $data->id,'rid' => $role->id]) }}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">[x]</a></td>

                                        </tr>

                                        <tr>
                                            <th>Created Date</th>
                                            <td>{{ $data->created_at }}</td>
                                        </tr>
                                        <tr>
                                            <th>Update Date</th>
                                            <td>{{ $data->updated_at }}</td>
                                        </tr>
                                        <tr>
                                            <th>Add Role to User</th>
                                            <td>
                                                <form action="{{ route('admin.user.addrole', ['id' => $data->id]) }}" method="post">
                                                   @csrf
                                                <select name="role_id">
                                                    @foreach($roles as $role)

                                                        <option value="{{$role->id}}">{{$role->name}}</option>

                                                    @endforeach
                                                </select>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary">Add Role</button>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
