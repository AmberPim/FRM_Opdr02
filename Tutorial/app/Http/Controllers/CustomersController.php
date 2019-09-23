<?php

namespace App\Http\Controllers;
use App\Customer;
use App\Company;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function __construct()
    {
        $this->middelware('auth');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required| min:3' ,
             'email' => 'required',
            'active'=>'required',
            'company_id' => 'required'
            ]);

        Customer::create($data);


        return back ();
    }


    public function list ()
    {
      $activeCustomers=Customer::active() -> get();
        $inactiveCustomers=Customer::where('active',0)->get();
        $companies=Company::all();

        return view('Internal.customers',compact('activeCustomers','inactiveCustomers','companies'));
        }

}
