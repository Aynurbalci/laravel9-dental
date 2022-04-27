@extends('layouts.adminindow')
@section('title', 'Treatment Image Gallery')


@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> Treatment Image List</h3>

            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>
                                Id
                            </th>

                            <th>
                                Title
                            </th>
                            <th>
                                Image
                            </th>

                            <th style="width:30px">
                                Update
                            </th>
                            <th>
                                Delete
                            </th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $rs)
                            <tr>
                                <td>{{ $rs->id }}</td>

                                <td>{{ $rs->title }}</td>
                                <td>
                                    @if ($rs->image)
                                        <img src="{{ \Illuminate\Support\Facades\Storage::url($rs->image) }}"
                                            class="m-0">
                                    @endif
                                </td>
                                <td>{{ $rs->status }}</td>
                                <td><a class="btn btn-primary me-md-2 mb-1"
                                        href="{{ route('admin.category.edit', ['id' => $rs->id]) }}">Edit</a></td>
                                <td><a class="btn btn-inverse-danger btn-fw"
                                        href="{{ route('admin.category.destroy', ['id' => $rs->id]) }}"
                                        onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>




@endsection
