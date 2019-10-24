
@extends('layout')
@section('title','new customer')
@section('content')
<div class="row">
    <div class="header pt-4 ">
        <h1> Create New Customer</h1>
        </div>
</div>
<div class="row justify-content-center pt-2 ">
    <div class="col-md-8 ">
        <div class="card">
            <div class="card-header"> Create New Customer</div>

            <div class="card-body">
                <form method="POST" action="/customers">
                    @csrf
                  @include('form')
                  <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
