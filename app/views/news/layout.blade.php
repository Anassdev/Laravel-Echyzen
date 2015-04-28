{{-- app/views/news/layout.html.blade --}}

@extends('public')

@section('title')
    @parent - News
@stop

@section('javascript')
    @parent
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
    <script src="js/news/newsDisplay.js"></script>
    <script src="js/news/topMenu.js"></script>
    <script src="js/news/newsAjax.js"></script>
@stop

@section('stylesheet')
    @parent
    <link rel="stylesheet" href= "{{ asset('css/news/newsdesign.css') }}" />
@stop

@section('body')
    <div id="bandeau"><h1 class="bandeau_titre">News</h1><div id="bandeau_centre"></div></div>

    <div id="corps_bis" >
        <div id="news_container">
            @yield('news_body')
            <div id="news1bis">
            </div>
        </div>
        <div id="news_categorie">
            <div id="rubrique">
                <h2>Rubrique</h2>
                <ul>
                </ul>
            </div>

            <div id="archive">
                <h2>Archive</h2>
                <ul>
                </ul>
            </div>
            <div id="mot_cle">
                <h2>Mots-Clés</h2>
                <ul>
                </ul>
            </div>
        </div>
    </div>
@endsection
