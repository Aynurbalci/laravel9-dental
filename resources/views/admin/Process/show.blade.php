@extends('layouts.adminindow')

@section('title', 'Show Messages:' .$data->title)

@section('content')
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h1 class="text-center">{{ $data->title }}</h1>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                            <div class="card-body">
                                <h4 class="card-title">Process Detail</h4>

                                <div class="table-responsive pt-3">


                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Id</th>
                                            <td>{{ $data->id }}</td>
                                        </tr>
                                        <tr>
                                            <th>User</th>
                                            <td>{{ $data->user->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Name & Surname</th>
                                            <td>{{ $data->name }}</td>
                                        </tr>

                                        <tr>
                                            <th>Phone</th>
                                            <td>{{ $data->phone }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{ $data->email }}</td>
                                        </tr>
                                        <tr>
                                            <th>Address</th>
                                            <td>{{ $data->adress }}</td>
                                        </tr>
                                        <tr>
                                            <th>Ip Number</th>
                                            <td>{{ $data->IP }}</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>{{ $data->status }}</td>
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
                                            <th>Admin Note :
                                                <br>   <br>
                                            Status:
                                            </th>
                                            <td>
                                                <form action="{{ route('admin.process.update', ['id' => $data->id]) }}" method="post">
                                                   @csrf
                                                    <textarea name="note" cols="100" rows="5">
{{$data->note}}

                                                    </textarea>
                                                    <br>
                                                  <select name="status">
                                                      <option selected>{{ $data->status}}</option>
                                                      <option >Accepted</option>
                                                      <option>Shipped</option>
                                                      <option>Canceled</option>
                                                      <option>Completed</option>
                                                  </select>

                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                    </table>
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Id</th>

                                            <th>Title</th>
                                            <th>Price</th>
                                            <th>Amount</th>
                                            <th>Image</th>

                                            <th>Status</th>

                                            <th>Cancel</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($datalist as $rs)
                                            <tr>
                                                <td>{{ $rs->id }}</td>

                                                <td>{{ $rs->treatment->title }}</td>
                                                <td>{{ $rs->price }}</td>
                                                <td>{{ $rs->amount }}</td>
                                                <td>
                                                    @if ($rs->treatment->image)
                                                        <img src="{{ \Illuminate\Support\Facades\Storage::url($rs->treatment->image) }}" height="30"
                                                             alt="">
                                                    @endif

                                                </td>

                                                <td>{{ $rs->status }}</td>
                                                <td><a class="btn btn-inverse-success btn-fw"
                                                       href="{{ route('admin.process.accepttreatment', ['id' => $rs->id]) }}"
                                                       onclick="return confirm('Accepting !! Are you sure ?')">Accept</a>
                                                <br>
                                                <a class="btn btn-inverse-danger btn-fw"
                                                       href="{{ route('admin.process.canceltreatment', ['id' => $rs->id]) }}"
                                                       onclick="return confirm('Cancelling !! Are you sure ?')">Cancel</a></td>


                                            </tr>
                                        @endforeach
                                        </tbody>
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
