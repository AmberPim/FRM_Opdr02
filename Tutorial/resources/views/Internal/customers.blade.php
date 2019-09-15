@extends('layout')

@section('title', 'Customers')

@section('content')

    <div class="row">
        <div class="col-md-2"> </div>
        <div class="col-md-4">

            <h1> Active Customers </h1>
                <ul>
                     @foreach($activeCustomers as $activeCustomer)
                    <li> {{$activeCustomer->name}} @ {{$activeCustomer->email}} is with {{$activeCustomer->company->name}} </li>
                     @endforeach
                </ul>
        </div>

        <div class="col-md-4">

            <h1> InActive Customers </h1>
            <ul>
                @foreach($inactiveCustomers as $inactiveCustomer)
                    <li> {{$inactiveCustomer->name}} @ {{$inactiveCustomer->email}} is with {{$inactiveCustomer->company->name}} </li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-2"></div>
    </div>

    <div class="row">
        <div class="col-md-2"> </div>
        <div class="col-md-8">


          @foreach($companies as $company)
            <h3> {{$company->name}}</h3>

              @foreach($company->customers as $customer)
                  <li> {{$customer->name}}</li>
                  @endforeach

            @endforeach
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

    <div class="form-group">
        <label for="company_id">Status</label>
        <select name="company_id" id = "company_id" class="form-control">
@foreach ($companies as $company)
                <option value="{{$company->id}}"> {{$company->name}} </option>
    @endforeach

        </select>
    </div>



    <button type="submit" class="btn btn-primary">Add Customer</button>
    @csrf


</form>

        </div>
        <div class="col-md-2"></div>
    </div>


@endsection