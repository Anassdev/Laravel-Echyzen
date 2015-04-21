{{--
{{ Form::open(array('url' => 'auth/login')) }}
<strong> {{ Form::label('nom', 'Nom :') }} </strong>
{{ Form::text('nom') }}
<strong> {{ Form::label('password', 'Mot de passe :') }}</strong>
{{ Form::password('password') }}
{{ Form::submit('Se connecter') }}
{{ Form::close() }}
--}}
    <div>
        Pour vous connecter au site veuillez entrer votre pseudo et votre mot de passe dans le formulaire ci-dessous :
    </div>
    <div>
        @if (Session::has('flash_error'))
            <div>
                {{ Session::get('flash_error') }}
            </div>
        @endif
        <div>
            {{ Form::open(array('url' => 'auth/login', 'method' => 'POST')) }}
            <div>
                {{ Form::label('nom', 'Pseudo :') }}
                {{ Form::text('nom', '') }}
            </div>
                {{ Form::label('password', 'Mot de passe :') }}
                {{ Form::password('password') }}
                {{ Form::checkbox('souvenir') }}Se rappeler de moi
            <div>
                <div>
                    {{ Form::submit('Se connecter') }}
                </div>
            </div>
            {{ Form::close()}}
        </div>
        <div>
            <p>
                {{ link_to('remind/remind', 'J\'ai oublié mon mot de passe...') }}
            </p>
        </div>
    </div>
    <div>
        Si vous n'avez pas encore de compte vous pouvez en créer un en cliquant sur ce bouton :
        {{ link_to('auth/inscription', 'Je m\'inscris !') }}
    </div>