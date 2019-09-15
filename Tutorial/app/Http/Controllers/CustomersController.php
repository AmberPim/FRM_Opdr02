<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function store()
    {
        $data = request()->validate([
            'customer_name' => 'required| min:3' ,
        'customer_email' => 'required']);

        $customer = new Customer();
        $customer->name = request('customer_name');
        $customer->email = request ('customer_email|email');
        $customer->save();

        return back ();
    }


    public function list ()
    {
        $customers = Customer::all();

        return view('Internal.customers',['customers' => $customers]);
        }

}
