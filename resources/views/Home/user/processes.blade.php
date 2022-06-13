@extends('layouts.home')
@section('title', 'User Processes List')

@section('content')

    <a href="{{ route('home') }}" class="font-raguler">Home </a><a href="{{ route('contact') }}"> |
        User Processes</a>
    <nav id="mainnav" class="mainnav">

        <ul class="menu">

            <li class="col-md-2">
                <a href="http://127.0.0.1:8001" title="">User Menu</a>
                @include('home.user.usermenu')
            </li>
            <li class="col-md-9">
                <a href="http://127.0.0.1:8001/about" title="">User Processes List</a>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>

                        <th>Name & Surname</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Status</th>

                        <th>Cancel</th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $rs)
                        <tr>
                            <td>{{ $rs->id }}</td>


                            <td>{{ $rs->name }}</td>
                            <td>{{ $rs->phone }}</td>
                            <td>{{ $rs->email }}</td>
                            <td>{{ $rs->adress }}</td>

                            <td>{{ $rs->status }}</td>

                            <td><button type="button" class="btn2"><a

                                   href="{{ route('userpanel.processdetail', ['id' => $rs->id]) }}"
                                 >Show Detail</a></button></td>

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


