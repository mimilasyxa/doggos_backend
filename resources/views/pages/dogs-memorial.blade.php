<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layout.partials.bootstrap')
    <title>@lang('dogs.memorial')</title>
</head>
<body class="antialiased">
<div class="container mt-5" style="border:1px solid black">
    @include('layout.partials.header')
    @include('layout.partials.nav-bar')
    <div class="text-center">@lang('dogs.memorial')</div>
    <div class="text-center">{{$settings->getText()}}</div>
    <div class="col-11 mx-auto justify-content-center d-flex flex-wrap">
        @foreach($dogs as $dog)
            <div class="m-1" style="width: 30%">
                <img class="img-fluid img-thumbnail" src="{{config('app.ASSET_URL')}}{{$dog->getPhoto()}}">
                <div class="text-center">{{$dog->getName()}}</div>
            </div>
        @endforeach
    </div>
</div>
@include('layout.partials.footer')
</body>
</html>
