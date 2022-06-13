@extends('layouts.home')
@section('title', 'Process Page')


@section('content')

    <div class="baner-tittle">
        <a href="{{ route('home') }}" class="font-raguler">Home </a><a href="{{ route('contact') }}"> |
            Process</a>

    </div>
    @include('home.messages')
    <form class="content-form wow fadeInUp" id="checkout-form"
          action="{{route("randevu.storeprocess")}}" method="post"
          accept-charset="utf-8" novalidate="novalidate"
          style="visibility: visible; animation-name: fadeInUp;">
        @csrf
        <nav id="mainnav" class="mainnav">
            <ul class="menu">


                <li class="col-md-6">

                    <h1>Payment Information</h1>


                    <input tabindex="1" id="name" name="name" value="{{Auth::user()->name}}" class="input-contact"
                           type="text" placeholder="Name & Surname" required="">


                    <br>


                    <input tabindex="2" id="tel" name="phone" value="" class="input-contact" type="tel"
                           placeholder="Phone Number" required>

                    <br>


                    <input type="email" tabindex="3" id="email" name="email" value="" class="form-control"
                           placeholder="Email" required>


                    <br>


                    <input type="text" tabindex="4" id="subject" name="adress" value="" class="form-control"
                           placeholder="Address" required>





                </li>
                <li class="col-md-6">

                    <h1>Payment Information ${{$total}}</h1>


                    <input tabindex="1" id="name" name="total" value="{{$total}}" class="input-contact"
                           type="hidden" placeholder="" required="">





                    <input tabindex="2" id="tel" name="holder" value="" class="input-contact" type="text"
                           placeholder="Card Holder" required="">


                    <br>


                    <input type="text" tabindex="3" id="email" name="number" value="" class="form-control"
                           placeholder="Card Number" required="">


                    <br>


                    <input type="text" tabindex="4" id="subject" name="date" value="" class="form-control"
                           placeholder="Exp. Date">


                    <br>


                    <textarea name="code" type="text" placeholder="Security Code"
                              maxlength="1000"></textarea>


                    <br>

                    <button type="submit">Complete Process</button>



                </li>
            </ul>

        </nav>
    </form>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
@endsection
