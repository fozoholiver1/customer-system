@extends('layout')
@section('title','details for '.$customer->name)
@section('content')
<div class="row">
    <h1>Details for {{ $customer->name }}  </h1>
    <button class="btn btn-warning ">
            <a href=" /customers/{{$customer->id}}/edit ">Edit Your Details</a>
        </button>
   <div class="pl-5">
    <form action="/customers/{{ $customer->id }} "method="POST">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">
            Delete Your Details
        </button>
    </form>
   </div>
</div>


<table class="table table-light pt-4">
 <thead class="thead-light">
     <tr>
         <th> company name</th>
         <th> customers name</th>
         <th> customers email</th>
         <th> customers status</th>
     </tr>
 </thead>
 <tbody>

         <tr>
             <th> {{ $customer->company->name }}</th>
             <th> {{ $customer->name }}</th>
             <th>{{ $customer->email }}</th>
             <th>{{ $customer->active }}</th>
         </tr>

 </tbody>
</table>
@endsection
