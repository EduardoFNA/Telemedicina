<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome5.4.1web/css/all.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/app.css')}}">
    @yield('styles')
</head>
<body>

@include('partials/header')

<div class="container">
  @yield('content')
</div>

<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/popper_1.14.4.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
@yield('scripts')    
</body>
</html>