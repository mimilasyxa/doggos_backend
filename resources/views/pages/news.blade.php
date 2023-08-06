<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layout.partials.bootstrap')
    <title>Новости</title>
</head>
<body class="antialiased">
<div class="container mt-5" style="border:1px solid black">
    @include('layout.partials.header')
    @include('layout.partials.nav-bar')
    <div class="text-center">Новости питомника</div>
    <div class="col-10 mx-auto">
        @foreach($news->items() as $item)
            <div>
                <div class="news-title">{{$item->getTitle()}}</div>
                <div class="news-summary text-center">{{$item->getSummary()}}</div>
                <div class="col-2 mx-auto">
                <a  class="w-100 text-black btn btn-secondary"
                                                        href="{{route('news.get.one', [$item->getSlug()])}}">Продолжить
                        чтение</a>
                </div>
                <br>
            </div>
        @endforeach
    </div>
    {{$news->links('vendor.pagination.custom')}}
</div>
@include('layout.partials.footer')
</body>
</html>
