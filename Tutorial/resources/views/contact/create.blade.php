@extends('layout')

@section('title', 'contact')


@section('content')


    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">

            <h1>
                Contact Us
            </h1>

@if(!session()->has('message'))

            <form action="{{route('contact.store')}}" method="POST" class="pb-5">
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
                <label for="message"> Message</label>
                    <textarea name ="message" id="message" cols="30" rows="10" class="form-control">{{old('message')}}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Send Email</button>
                @csrf

            </form>
        </div>
    </div>

    @endif
    @endsection