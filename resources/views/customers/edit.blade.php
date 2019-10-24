
@extends('layout')
@section('title','new customer')
@section('content')
<div class="row">
    <div class="header pt-4 ">
        <h1>Edit Details for {{ $customer->name }}</h1>
        </div>
</div>
<div class="row justify-content-center pt-2 ">
    <div class="col-md-8 ">
        <div class="card">
            <div class="card-header"> Edit your Details</div>

            <div class="card-body">
                <form method="POST" action="/customers/{{ $customer->id }}">
                    @csrf
                    @method('PATCH')
                  @include('form')
                  <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                              Save New Record
                            </button>
                        </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
