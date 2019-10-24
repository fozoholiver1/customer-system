@extends('layout')
@section('title','customers_log page')
@section('content')

<div class="row">
   <div class=" nav justify-content-between">
   <h1>welcome to our customers page  </h1>
   <button class="btn btn-warning ">
       <a href="/customers/create">create new customer</a>
   </button>
</div>
</div>

    <h1> customers information</h1>
       <table class="table table-light pt-4">
        <thead class="thead-light">
            <tr>
                <th> customers id</th>
                <th> customers name</th>
                <th> customers email</th>
                <th> customers status</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($customers as $customer)
                <tr>
                    <th> {{ $customer->id }}</th>
                    <th> <a href="/customers/{{ $customer->id }}">{{ $customer->name }}</a></th>
                    <th>{{ $customer->email }}</th>
                    <th>{{ $customer->active }}</th>
                </tr>
                @endforeach
        </tbody>
    </table>

<h1> company and customers relation</h1>
<table class="table table-light pt-4">
    <thead class="thead-light">
        <tr>
            <th> company name</th>
            <th> customers name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($companies as $company)
        <tr>
            <td>{{ $company->name}}</td>

            @foreach ($company->customers as $customer)
            <td>{{ $customer->name}}</td>
            @endforeach

        </tr>
        @endforeach
    </tbody>
</table>

<h1> Active customers</h1>
<table class="table table-light pt-4">
    <thead class="thead-light">
        <tr>
            <th> name</th>
            <th>email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($activeCustomers as $activeCustomer)
        <tr>

            <td>{{ $activeCustomer->company->name}}</td>
            <td>{{ $activeCustomer->email}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<h1> Inctive customers</h1>
<table class="table table-light pt-4">
    <thead class="thead-light">
        <tr>
            <th> name</th>
            <th>email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($inactiveCustomers as $inactiveCustomer)
        <tr>

            <td>{{ $inactiveCustomer->name}}</td>
            <td>{{ $inactiveCustomer->email}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
