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
             'email' => 'required',
            'active'=>'required'
            ]);

        $customer = new Customer();
        $customer->name = request('customer_name');
        $customer->email = request ('email');
        $customer->active = request('active');
        $customer->save();

        return back ();
    }


    public function list ()
    {
      $activeCustomers=Customer::where('active', 1) -> get();
        $inactiveCustomers=Customer::where('active',0)->get();

        return view('Internal.customers',compact('activeCustomers','inactiveCustomers'));
        }

}
