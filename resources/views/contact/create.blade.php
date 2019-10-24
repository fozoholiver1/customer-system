@extends('layout')
@section('title','contact page')
@section('content')
<div class="row justify-content-center pt-2 ">
    <div class="col-md-8 ">
        <div class="card">
            <div class="card-header"> Edit your Details</div>

            <div class="card-body">
                <form method="POST" action="/contact">
                    @csrf
<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email')}}" autocomplete="email">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div

<div class="form-group row">
    <label for="message" class="col-md-4 col-form-label text-md-right">Write A Message</label>

    <div class="">

        <textarea  cols="60" rows="10" id="message" class=" form-control @error('message') is-invalid @enderror" name="message" value="{{ old('message')}}"></textarea>
        @error('message')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div
  <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                              Send message
                            </button>
                        </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
