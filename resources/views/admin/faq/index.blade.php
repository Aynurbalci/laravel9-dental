@extends('layouts.admin')
@section('title', 'FAQ List')


@section('content')

    <div class="card">
        <h2 class="text-left">FAQ list</h2>
        <div class="card-body">
            <button type="button" class="btn btn-outline-danger btn-icon-text">
                <a href="{{ route('admin.faq.create') }}" class="ti-upload btn-icon-prepend"
                    style="text-decoration:none"> Add Question</a>

            </button>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>

                            <th>Id</th>
                            <th>Questions</th>
                            <th>Answer</th>
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
                                <td>{{ $rs->question }}</td>
                                <td>{!! $rs->answer !!}</td>
                                <td>{{ $rs->status }}</td>
                                <td><a class="btn btn-inverse-primary btn-fw"
                                        href="{{ route('admin.faq.edit', ['id' => $rs->id]) }}">Edit</a></td>
                                <td><a class="btn btn-inverse-danger btn-fw"
                                        href="{{ route('admin.faq.destroy', ['id' => $rs->id]) }}"
                                        onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>
                                <td><a class="btn btn-inverse-success btn-fw"
                                        href="{{ route('admin.faq.show', ['id' => $rs->id]) }}">Show</a></td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>





@endsection
@section('footer')
