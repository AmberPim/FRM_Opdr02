@extends('layout')

@section('title', 'Customers')

@section('content')

    <div class="row">
        <div class="col-md-2"> </div>
        <div class="col-md-4">

            <h1> Active Customers </h1>
                <ul>
                     @foreach($activeCustomers as $activeCustomer)
                    <li> {{$activeCustomer->name}} @ {{$activeCustomer->email}} </li>
                     @endforeach
                </ul>
        </div>

        <div class="col-md-4">

            <h1> InActive Customers </h1>
            <ul>
                @foreach($inactiveCustomers as $inactiveCustomer)
                    <li> {{$inactiveCustomer->name}} @ {{$inactiveCustomer->email}} </li>
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
    <label for="name">Name</label>
    <input type="text" name="name" placeholder="Basilisk" value="{{old('name')}}" class="form-control">
    <div>{{ $errors->first('name') }} </div>
    </div>

    <div class="form-group">
    <label for="email">Email</label>
    <input type="text" name="email" placeholder="Basilisk@chamberOfSecrets.com" value="{{old('email')}}" class="form-control">
    <div>{{ $errors->first('email') }} </div>
    </div>

    <div class="form-group">
        <label for="active">Status</label>
        <select name="active" id = "active" class="form-control">
            <option value="" disabled> Select Status</option>
            <option value="1"> Active</option>
            <option value="0">Inactive</option>
        </select>
    </div>


    <button type="submit" class="btn btn-primary">Add Customer</button>
    @csrf


</form>

        </div>
        <div class="col-md-2"></div>
    </div>


@endsection