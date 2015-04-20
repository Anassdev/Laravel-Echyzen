{{ Form::open(array('url' => 'auth/login')) }}
<strong> {{ Form::label('nom', 'Nom :') }} </strong>
{{ Form::text('nom') }}
<strong> {{ Form::label('password', 'Mot de passe :') }}</strong>
{{ Form::password('password') }}
{{ Form::submit('Se connecter') }}
{{ Form::close() }}
