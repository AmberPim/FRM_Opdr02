@extends('layout')

@section('title')
    Customers
    @endsection

@section('content')
<h1> Customers </h1>

<ul>
    @foreach($customers as $customer)
        <li> {{$customer->name}} @ {{$customer->email}} </li>
        @endforeach
</ul>

    <h3> Add a Customer</h3>



<form action="/customers" method="POST">
    <p>Customer Name:</p>
    <input type="text" name="customer_name" placeholder="Basilisk" value="{{old('customer_name')}}">
    <div>{{ $errors->first('customer_name') }} </div>
    <br>
    <p>Email:</p>
    <input type="text" name="customer_email" placeholder="Basilisk@chamberOfSecrets.com" value="{{old('customer_email')}}">
    <div>{{ $errors->first('customer_email') }} </div>
    <br>
    <input type="submit" value="Submit">

    @csrf


</form>



@endsection