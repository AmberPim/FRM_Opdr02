<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function store()
    {
        $data = request()->validate([
            'name' => 'required| min:3' ,
             'email' => 'required',
            'active'=>'required'
            ]);

        Customer::create($data);


        return back ();
    }


    public function list ()
    {
      $activeCustomers=Customer::active() -> get();
        $inactiveCustomers=Customer::where('active',0)->get();

        return view('Internal.customers',compact('activeCustomers','inactiveCustomers'));
        }

}
