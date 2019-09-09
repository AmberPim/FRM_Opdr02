<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function store()
    {

        $customer = new Customer();
        $customer->name = request('customer_name');
        $customer->save();

        return back ();
    }


    public function list ()
    {
        $customers = Customer::all();

        return view('Internal.customers',['customers' => $customers]);
        }

}
