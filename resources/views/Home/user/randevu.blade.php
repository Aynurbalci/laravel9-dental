@extends('layouts.home')
@section('title', 'User randevu')

@section('content')

    <a href="{{ route('home') }}" class="font-raguler">Home </a><a href="{{ route('contact') }}"> |
        User randevu</a>

    <table class="table table-bordered">
        <thead class="thead-dark">
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Remove</th>
        </tr>
        </thead>
        @foreach($data as $rs)
        <tbody class="align-middle">
        <tr>
            <td>
                <div class="img">
                    <a href="#"><img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="Image"></a>
                    <p>{{$rs->product->title}}</p>
                </div>
            </td>
            <td>{{$rs->product->price}}</td>
            <td>
                <div class="qty">
                    <button class="btn-minus"><i class="fa fa-minus"></i></button>
                    <input type="text" value="1">
                    <button class="btn-plus"><i class="fa fa-plus"></i></button>
                </div>
            </td>
            <td>{{$rs->product->price}}</td>
            <td><button><i class="fa fa-trash"></i></button></td>
        </tr>
        @endforeach



        </tbody>
    </table>



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


