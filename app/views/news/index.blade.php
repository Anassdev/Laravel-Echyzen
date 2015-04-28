{{-- app/views/news/index.html.blade --}}

@extends('news.layout')

@section('news_body')
{{--    @foreach($news as $new)
        {{ $new->titre }}
        <br>
    @endforeach
--}}
    @include('news.show', array('news'=>$news))

@endsection
