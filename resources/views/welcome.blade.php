<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layout.partials.bootstrap')
    <title>Главная страница</title>
</head>
<body class="antialiased">
<div class="container mt-5" style="border:1px solid black">
    @include('layout.partials.header')
    @include('layout.partials.nav-bar')
    <div class="main-page row mt-5">
    <div class="main-page-news col-2">
        @foreach($news as $singleNews)
            <div class="single-news">
                <div class="news-title">
                    {{$singleNews->getTitle()}}
                </div>
                <div class="news-summary">
                    {{$singleNews->getSummary()}}
                </div>
                <div class="news-timestamp">
                    {{$singleNews->getCreatedAt()}}
                </div>
            </div>
        @endforeach
    </div>
    <div class="main-page-info col">
        <div class="title"><p class="text-center">{{$settings->getTitle()}}</p></div>
        <div class="title"><p class="text-center">{{$settings->getDescription()}}</p></div>
    </div>
    </div>
</div>
@include('layout.partials.footer')
</body>
</html>
