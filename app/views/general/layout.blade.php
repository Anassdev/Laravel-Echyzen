<!DOCTYPE html>
<html ng-app="EchyzenApp">
	<head>
		<title>Echyzen - Portfolio @yield('title')</title>
		<meta name="description" content="portofolio, Tutoriels/astuces et galerie 3D/2D!!!" />
		<meta name="keywords" content="portofolio, galerie, infographie, informatique, programmation, zbrush, blender, html, css, php, ..." />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


		@section('stylesheet')
            <link rel="stylesheet" href= "{{ asset('css/design.css') }}" />
            <link rel="stylesheet" href= "{{ asset('css/jquery.fancybox.css') }}" />
            <link rel="stylesheet" href= "{{ asset('css/sidebar_effect.css') }}" />
            <link rel="stylesheet" href= "{{ asset('css/topMenu.css') }}" />


            <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" >
			<!-- Icon Apple touch -->
			<link rel="apple-touch-icon" href= "{{ asset('images/icon_apple.png') }}" />
			<!-- Icon Windows 8 -->
			<meta name="application-name" content="Echyzen Portofolio's"/>
			<meta name="msapplication-TileColor" content="#58595B" />
			<meta name="msapplication-TileImage" content="{{ asset('images/icon_microsoft.png') }}" />
			<link rel="apple-touch-icon" href= "{{ asset('js/modernizr.custom.js') }}" />

            <!-- Angular JavaScript -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.15/angular.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.15/angular-resource.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.15/angular-cookies.min.js"></script>
		@show
	</head>

	<body>
        @include('general.container')
    	@section('javascript')
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
			<script src="js/classie.js"></script>

			{{-- Js progressBar --}}
			<script src="{{ asset('js/progress_bar.js') }}" type="text/javascript" ></script>

			{{-- Js du footer animation rond --}}
			<script src="{{ asset('js/design_effect.js') }}" type="text/javascript" ></script>

			{{-- Js du menu espace membre --}}
			<script src="{{ asset('js/sidebarEffects.js') }}" type="text/javascript" ></script>


			{{-- Js permettant submit by ajax --}}
			<script src="http://malsup.github.com/jquery.form.js"></script>

			{{-- Js du menu principal --}}
			<script src="{{ asset('js/responsiveMenu.js') }}" type="text/javascript" ></script>
			<script type="text/javascript" >
				jQuery(document).ready(function ($) {
				    $('#responsive-menu').responsiveMenu();
				});
			</script>

			{{-- Js de FancyBox --}}
			<script src="{{ asset('js/fancybox.js') }}" type="text/javascript" ></script>
			<script src="{{ asset('js/jquery.fancybox.pack.js') }}" type="text/javascript" ></script>

		@show
	</body>


</html>