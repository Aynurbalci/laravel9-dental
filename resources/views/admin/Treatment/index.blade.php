@extends('layouts.admin')
@section('title', 'Treatment List')


@section('content')

    <div class="card">
        <h2 class="text-left">Treatment list</h2>
        <div class="card-body">
            <button type="button" class="btn btn-outline-danger btn-icon-text">
                <a href="{{ route('admin.treatment.create') }}" class="ti-upload btn-icon-prepend"
                    style="text-decoration:none"> Add Treatment</a>

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
                            <th>Show</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $rs)
                            <tr>
                                <td>{{ $rs->id }}</td>
                                <td>
                                    {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category, $rs->category->title) }}
                                </td>
                                <td>{{ $rs->title }}</td>
                                <td>{{ $rs->price }}</td>
                                <td>
                                    @if ($rs->image)
                                        <img src="{{ \Illuminate\Support\Facades\Storage::url($rs->image) }}" height="30"
                                            alt="">
                                    @endif

                                </td>
                                <td> <a class="btn btn-inverse-primary btn-fw"
                                        href="{{ route('admin.image.index', ['pid' => $rs->id]) }}" onclick="return !window.open(this.href, '','top=50 left=100 width=1100 height=700')">
                                    <img src="{{ asset('assests') }}/admin/img/download.png">
                                    </a>
                                </td>
                                <td>{{ $rs->status }}</td>
                                <td><a class="btn btn-inverse-primary btn-fw"
                                        href="{{ route('admin.treatment.edit', ['id' => $rs->id]) }}">Edit</a></td>
                                <td><a class="btn btn-inverse-danger btn-fw"
                                        href="{{ route('admin.treatment.destroy', ['id' => $rs->id]) }}"
                                        onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>
                                <td><a class="btn btn-inverse-success btn-fw"
                                        href="{{ route('admin.treatment.show', ['id' => $rs->id]) }}">Show</a></td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>




@endsection
@section('footer')
