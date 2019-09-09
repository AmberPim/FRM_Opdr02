@extends('layout')

@section('title')
    Customers
    @endsection

@section('content')
<h1> Customers </h1>

<ul>
    @foreach($customers as $customer)
        <li> {{$customer->name}} </li>
        @endforeach
</ul>

    <h3> Add a Customer</h3>



<form action="/customers" method="POST">
    Customer Name:<br>
    <input type="text" name="customer_name" placeholder="Basilisk">
    <br>
    <br><br>
    <input type="submit" value="Submit">

    @csrf
</form>



@endsection