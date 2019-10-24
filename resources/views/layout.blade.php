<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/mycss/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/mycss/site.css') }}">
    <script src="/myjs/bootstrap/main.js"></script>
    <title>@yield('title','customers')  </title>
</head>
<body>
    <div class="container">
       @include('nav')

       @if (session()->has('message'))
       <div class="alert alert-success" role="alert">
           <strong>success</strong> {{ session()->get('message') }}
        </div>
       @endif
        @yield('content')
    </div>
</body>
</html>
