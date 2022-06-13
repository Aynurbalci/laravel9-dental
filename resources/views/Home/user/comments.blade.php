@extends('layouts.home')
@section('title', 'User Comments & REviews')

@section('content')

    <a href="{{ route('home') }}" class="font-raguler">Home </a><a href="{{ route('contact') }}"> |
        User Comment</a>
    <nav id="mainnav" class="mainnav">

        <ul class="menu">

            <li class="col-md-2">
                <a href="http://127.0.0.1:8001" title="">User Menu</a>
                @include('home.user.usermenu')
            </li>
            <li class="col-md-9">
                <a href="http://127.0.0.1:8001/about" title="">User Comments & Reviews</a>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>

                        <th>Treatment</th>
                        <th>Subject</th>
                        <th>Reviews</th>
                        <th>Rate</th>
                        <th>Status</th>

                        <th>Delete</th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($comments as $rs)
                        <tr>
                            <td>{{ $rs->id }}</td>


                            <td><a href="{{route('treatment',['id'=>$rs->treatment_id])}}">{{ $rs->treatment->title }}</a></td>
                            <td>{{ $rs->subject }}</td>
                            <td>{{ $rs->review }}</td>
                            <td>{{ $rs->rate }}</td>

                            <td>{{ $rs->status }}</td>

                            <td><a class="btn btn-inverse-danger btn-fw"
                                   href="{{ route('userpanel.reviewdestroy', ['id' => $rs->id]) }}"
                                   onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </li>



        </ul>

    </nav>




    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

@endsection


