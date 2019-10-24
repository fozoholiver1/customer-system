<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Company;

class CustomersController extends Controller
{
 public function index( ){

    $activeCustomers=Customer::active()->get();//we use the ()after applying the scope to our data
    $inactiveCustomers=Customer::inactive()->get();//we use the ()after applying the scope to our data
    $customers=Customer::all();//to get all columbs from db
    $companies=Company::all();//to get all companies columbs from db
    return view('customers.index',compact('activeCustomers','inactiveCustomers','customers','companies'));
}


public function create(){
    $companies=Company::all();//to get all companies columbs from db
    $customer= new Customer();//this creates a blank model( we want to use our form for both create and edit)


    return view('customers.create',compact('companies','customer'));
 }


 public function store(){
  $data=request()->validate([
        'name' => 'required',
        'email' => 'required|email',
       'active' => 'required',
        'company_id' => 'required',
    ]);
    Customer::create($data);
    return redirect('/customers');
 }


 public function show( Customer $customer){

     $companies=Company::all();//to get all companies columbs from db
    //$customer=Customer::findOrFail($customer);//to get all columbs from db
    return view('customers.show',compact('customer','companies'));
 }


 public function edit( Customer $customer){

     $companies=Company::all();//to get all companies columbs from db
    return view('customers.edit',compact('customer','companies'));
}


public function update( Customer $customer){
    $data=request()->validate([
        'name' => 'required',
        'email' => 'required|email',
       'active' => 'required',
        'company_id' => 'required',
    ]);

    $customer->update( $data );
    return redirect('customers/'.$customer->id);

 }

public function destroy( Customer $customer){

    $customer->delete();

    return redirect('/customers');

 }


}
