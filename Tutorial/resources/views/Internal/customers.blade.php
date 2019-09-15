@extends('layout')

@section('title', 'Customers')

@section('content')

    <div class="row">
        <div class="col-md-2"> </div>
        <div class="col-md-8">

            <h1> Customers </h1>
                <ul>
                     @foreach($customers as $customer)
                    <li> {{$customer->name}} @ {{$customer->email}} </li>
                     @endforeach
                </ul>
        </div>
        <div class="col-md-2"></div>
    </div>


    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">

            <h3> Add a Customer</h3>

<form action="/customers" method="POST" class="pb-5">
    <div class="form-group">
    <label for="customer_name">Name</label>
    <input type="text" name="customer_name" placeholder="Basilisk" value="{{old('customer_name')}}" class="form-control">
    <div>{{ $errors->first('customer_name') }} </div>
    </div>

    <div class="form-group">
    <label for="customer_email">Email</label>
    <input type="text" name="customer_email" placeholder="Basilisk@chamberOfSecrets.com" value="{{old('customer_email')}}" class="form-control">
    <div>{{ $errors->first('customer_email') }} </div>
    </div>
    <button type="submit" class="btn btn-primary">Add Customer</button>
    @csrf


</form>

        </div>
        <div class="col-md-2"></div>
    </div>


@endsection