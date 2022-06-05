@extends('layouts.adminindow')
@section('title', 'Treatment Image Gallery')


@section('content')
    <h3>{{ $treatment->title }}</h3>
    <hr>
    <form action="{{ route('admin.image.store', ['pid' => $treatment->id]) }}" method="post"
        enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="inputText3" class="col-form-label">Title</label>
            <input id="inputText3" type="text" class="form-control" name="title">

                <label>image</label>
                <input type="file" name="image" class="form-control">

        <div class="input-group-append">
            <button class="btn btn-primary" type="submit" value="Upload">Save</button>

        </div>

        </div>




    </form>
    <table class="table table-bordered">
        <div class="card">
            <div class="card-header">
                <div class="card-body">
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


                            <th>
                                Delete
                            </th>
                        </tr>
                    </thead>
                </div>
            </div>
        </div>
        <tbody>
            @foreach ($images as $rs)
                <tr>
                    <td>{{ $rs->id }}</td>

                    <td>{{ $rs->title }}</td>
                    <td>
                        @if ($rs->image)
                            <img src="{{ \Illuminate\Support\Facades\Storage::url($rs->image) }}" style="height:100px">
                        @endif
                    </td>


                    <td><a class="btn btn-inverse-danger btn-fw"
                            href="{{ route('admin.image.destroy', ['pid' => $treatment->id,'id'=>$rs->id]) }}"
                            onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>

                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
