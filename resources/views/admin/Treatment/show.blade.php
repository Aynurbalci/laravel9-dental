@extends('layouts.admin')

@section('title', 'Show Treatments:' .$data->title)

@section('content')
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h1 class="text-center">{{ $data->title }}</h1>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="section-block" id="basicform">Show Treatment</div>
                            <div class="card-body">
                                <h4 class="card-title">Detail</h4>

                                <div class="table-responsive pt-3">
                                    <a class="btn btn-inverse-primary btn-fw"
                                        href="{{ route('admin.treatment.edit', ['id' => $data->id]) }}">Edit</a>
                                    <a class="btn btn-inverse-danger btn-fw"
                                        href="{{ route('admin.treatment.destroy', ['id' => $data->id]) }}"
                                        onclick="return confirm('Deleting !! Are you sure ?')">Delete</a>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Id</th>
                                            <td>{{ $data->id }}</td>
                                        </tr>
                                        <tr>
                                            <th>Category</th>
                                            <td>

                                                {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category, $data->category->title) }}
                                        </tr>
                                        <tr>
                                            <th>Title</th>
                                            <td>{{ $data->title }}</td>
                                        </tr>
                                        <tr>
                                            <th>Keywords</th>
                                            <td>{{ $data->keywords }}</td>
                                        </tr>
                                        <tr>
                                            <th>Price</th>
                                            <td>{{ $data->price }}</td>
                                        </tr>
                                        <tr>
                                            <th>Detail Info</th>
                                            <td>{{ $data->detail }}</td>
                                        </tr>

                                        <tr>
                                            <th>Image</th>
                                            <td>
                                                @if ($data->image)
                                                    <img src="{{ \Illuminate\Support\Facades\Storage::url($data->image) }}"
                                                        style="height:100px">
                                                @endif
                                            </td>
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
