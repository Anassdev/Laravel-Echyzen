<div id="st-container" class="st-container">
	<div class="st-pusher">
		<div class="st-content"><!-- this is the wrapper for the content -->
                @include('general.topMenu')
				<header>
					<nav class="responsive-menu clearfix" id="responsive-menu">
					  		<div id="st-trigger-effects">
								<button data-effect="st-effect-1"></button>
							</div>	
					  <ul>
						 @yield('menu')
					  </ul>
					</nav>
				</header>
			<div id="corps">
				<div id="progressBar"><div id="progressBarInside"></div></div>
				 @yield('body')
			</div>
			@include('general.footer')


		</div><!-- /st-content -->

	</div>
	<nav class="st-menu st-effect-1" id="menu-1">
		<h2>Espace membre</h2>
		<a class="iframe" href="http://echyzen.alwaysdata.net/myCV">zalando</a>
		<div id="st-trigger-effects">
			<ul>
			    @if(!Auth::check())
			        <li><span data-effect="st-effect-2">Profil</span></li>
			        <li><span data-effect="st-effect-3">Paramètres</span></li>
                    <li><a  href="#">Messagerie</a></li>
				@else
				    {{ link_to('auth/login', 'Connexion') }}
				@endif
			</ul>
		</div>	
	</nav>
	@unless(Auth::check())
        <nav class="st-menu st-effect-2" id="menu-2">
            <h2>Profil</h2>
            <div id="st-trigger-effects">
                <span data-effect="st-effect-1">Retour</span>
                <ul>
                    <li><a href="#">Connexion</a></li>
                    <li><a  href="#">Profil</a></li>
                    <li><a  href="#">Paramètres</a></li>
                    <li><a  href="#">Messagerie</a></li>
                </ul>
            </div>
        </nav>

        <nav class="st-menu st-effect-3" id="menu-3">
            <h2>Profil</h2>
            <div id="st-trigger-effects">
                <span data-effect="st-effect-1">Retour</span>
                Adresse e-mail :
                Nouvel e-mail?

                <p>Changer mot de passe</p>
                <p>Recevoir newsletter</p>
                <p>Supprimer son compte</p>
            </div>
        </nav>
	@endunless
</div><!-- /st-container -->