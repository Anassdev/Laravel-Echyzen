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

    {{-- Js TinyMCE --}}
    <script type="text/javascript" src="{{ asset('js/tinymce/js/tinymce/tinymce.min.js') }}"></script>
    <script>
    tinymce.init({
        menubar : false,
        selector: "textarea",
        plugins: [
            "link image code fullscreen imageupload"
        ],
        toolbar: "undo redo | bold italic | bullist numlist outdent indent | link image | imageupload | code | fullscreen",
        relative_urls: false
    });
    </script>
    <textarea></textarea>
</div>
@endsection