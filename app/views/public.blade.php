{{-- app/Resources/views/public.html.twig --}}

@extends('general.layout')

@section('menu')
	<li>{{ link_to('news', 'News') }}</li>
	<li><a href="#">Galerie</a></li>
	<li><a href="#">Projet</a></li>
	<li><a href="#">Tuto</a></li>
	<li>{{ link_to('test', 'Test') }}</li>
	<li><a href="#">Site</a></li>
@stop

@section('body')
<div>
    @if (Auth::check())
    <li>{{ link_to('auth/logout', 'Deconnexion') }}</li>
    @else
    <li>{{ link_to('auth/login', 'Connexion') }}</li>
    @endif
    <p>Ok sa fonctionne</p>
</div>
@endsection